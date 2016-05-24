<?php
abstract class mysql
{
	protected static $conn;
	public static $models;

	public static function connect($pw, $db)
	{
		self::$conn = new mysqli('p:localhost', 'root', $pw, $db);
		spl_autoload_register('mysql::loadmodel');
	}

	public static function loadmodel($name)
	{
		require self::$models . $name . '.php';
	}

	protected static function execute($query)
	{
		if (!self::$conn->real_query($query))
		{
			exit(self::$conn->error);
		}
	}

	protected $table, $pkey, $pkeytype, $stmt, $result = false, $row = null, $updates = [], $callCache = [];

	public function __construct($value = false)
	{
		$this->table = $this->table();

		$this->pkey = $this->resolve($this->intKey());
		$this->pkeytype = 'i';

		if (is_object($value))
		{
			$this->stmt = $value;
		}
		else if ($value === false)
		{
			$this->stmt = self::$conn->prepare('SELECT * FROM ' . $this->table);
		}
		else
		{
			$stringKey = $this->resolve($this->stringKey());

			if (is_array($value))
			{
				$this->insert($value);
				if ($this->stmt->insert_id == 0)
				{
					if (isset($value[$stringKey]))
					{
						$value = $value[$stringKey];
					}
					else
					{
						//No primary key found
						return;
					}
				}
				else
				{
					$value = $this->stmt->insert_id;
				}
			}

			if (is_string($value))
			{
				$this->pkey = $stringKey;
				$this->pkeytype = 's';
			}
			else if (!is_int($value))
			{
				exit($this->table() . '~invalid keytype');
			}

			$this->stmt = self::$conn->prepare('SELECT * FROM ' . $this->table . ' WHERE ' . $this->pkey . ' = ? LIMIT 1');
			if ($this->stmt === false)
			{
				exit(self::$conn->error);
			}

			$this->stmt->bind_param($this->pkeytype, $value);
		}

		$this->stmt->execute();
		$this->result = $this->stmt->get_result();
	}

	private function resolve($key)
	{
		if (substr($key, -1) == '#')
		{
			return substr($key, 0, -1);
		}
		else
		{
			return $this->table . '_' . $key;
		}
	}

	private function insert(&$keyvalues)
	{
		$qmarks = [];
		$qmarkcount = count($keyvalues);
		for ($i = 0; $i < $qmarkcount; $i++)
		{
			$qmarks[] = '?';
		}

		$keys = [];
		$values = [];
		$types = '';
		foreach ($keyvalues as $key => &$value)
		{
			$keys[] = $this->resolve($key);
			$values[] = &$value;
			$type = gettype($value);
			$types .= $type[0];
		}

		$this->stmt = self::$conn->prepare('INSERT INTO ' . $this->table . ' (' . implode(', ', $keys) . ') VALUES (' . implode(', ', $qmarks) . ')');
		if (!$this->stmt)
		{
			exit(self::$conn->error);
		}

		array_unshift($values, $types);
		call_user_func_array([$this->stmt, 'bind_param'], $values);
		$this->stmt->execute();
	}

	protected function intKey()
	{
		return 'id';
	}

	protected function stringKey()
	{
		return 'name';
	}

	//Singleton-like
	protected function table()
	{
		return strtolower(get_class($this));
	}

	public function reset()
	{
		$this->result->data_seek(0);
		$this->row = false;
	}

	public function found()
	{
		$this->update();
		$this->callCache = [];

		if ($this->result === false)
		{
			echo 'warning: no result in ', $this->table;
			return false;
		}

		if ($this->row === null)
		{
			//If the last result was null, restart from 0
			$this->reset();
		}

		$this->row = $this->result->fetch_assoc();
		return ($this->row !== null);
	}

	private function optionalNextRow()
	{
		if ($this->row === null)
		{
			$this->found();
		}
	}

	public function count()
	{
		return $this->result->num_rows;
	}

	public function &__get($key)
	{
		$this->optionalNextRow();

		if (isset($this->row[$key]))
		{
			if (!is_object($this->row[$key]))
			{
				$this->row[$key] = new $key($this->row[$key]);
			}

			$result = &$this->row[$key];
		}
		else if (isset($this->row[$this->table . '_' . $key]))
		{
			$result = &$this->row[$this->table . '_' . $key];
		}
		else
		{
			echo 'warning: key ', $key, ' not found in ', $this->table;
			$result = null;
		}

		return $result;
	}

	public function __set($key, $value)
	{
		$this->optionalNextRow();

		if (!isset($this->row[$key]))
		{
			if (isset($this->row[$this->table . '_' . $key]))
			{
				$key = $this->table . '_' . $key;
			}
			else
			{
				echo 'warning: key ', $key, 'not found in ', $this->table;
				return;
			}
		}

		$this->updates[$key] = $value;
		$this->row[$key] = $value;
	}

	public function add($key, $num = 1)
	{
		$this->optionalNextRow();

		if (!isset($this->row[$key]))
		{
			if (isset($this->row[$this->table . '_' . $key]))
			{
				$key = $this->table . '_' . $key;
			}
			else
			{
				echo 'warning: key ', $key, 'not found in ', $this->table;
				return;
			}
		}

		$primaryKey =& $this->primaryKey();
		exit($primaryKey);

		$update = self::$conn->prepare('UPDATE ' . $this->table . ' SET ' . $key . ' = ' . $key . ' + ? WHERE ' . $this->pkey . ' = ? LIMIT 1');
		$update->bind_param($this->pkeytype + 'i', $primaryKey, $num);
		$update->execute();

		$this->row[$key] += $num;
	}

	public function __call($type, $args)
	{
		$this->optionalNextRow();

		$cacheKey = serialize([$type, $args]);
		if (!isset($this->callCache[$cacheKey]))
		{
			$query = 'SELECT * FROM ' . $type . ' WHERE ' . $this->table . ' = ?';

			$argrefs = [''];
			$argrefs[1] = &$this->primaryKey();
			$argrefs[0] .= $this->pkeytype;

			if (isset($args[0]))
			{
				$query .= ' ' . array_shift($args);

				foreach ($args as &$value)
				{
					$type = gettype($value);
					$argrefs[0] .= $type[0];
					$argrefs[] = &$value;
				}
			}

			//var_dump($query, $argrefs);
			$stmt = self::$conn->prepare($query);
			call_user_func_array([$stmt, 'bind_param'], $argrefs);

			$this->callCache[$cacheKey] = new $type($stmt);
		}

		return $this->callCache[$cacheKey];
	}

	public function delete()
	{
		$delete = self::$conn->prepare('DELETE FROM ' . $this->table . ' WHERE ' . $this->pkey . ' = ? LIMIT 1');
		$delete->bind_param($this->pkeytype, $this->row[$this->pkey]);
		$delete->execute();

		$this->row = null;
	}

	public function update()
	{
		if (is_array($this->row) && $this->updates !== [])
		{
			$keys = [];
			$values = [''];

			foreach ($this->updates as $key => &$value)
			{
				$keys[] = $key . ' = ?';

				$type = gettype($value);
				$values[0] .= $type[0];
				$values[] = &$value;
			}

			$values[] = &$this->primaryKey();
			$values[0] .= $this->pkeytype;

			$update = self::$conn->prepare('UPDATE ' . $this->table . ' SET ' . implode($keys, ', ') . ' WHERE ' . $this->pkey . ' = ? LIMIT 1');
			call_user_func_array([$update, 'bind_param'], $values);
			$update->execute();

			$this->updates = [];
		}
	}

	private function &primaryKey()
	{
		if (!isset($this->row[$this->pkey]))
		{
			$this->pkey = $this->resolve($this->stringKey());
			$this->pkeytype = 's';

			if (!isset($this->row[$this->pkey]))
			{
				exit('No primary keys for table ' . $this->table);
			}
		}

		return $this->row[$this->pkey];
	}

	public function __destruct()
	{
		if ($this->result !== false)
		{
			$this->update();
		}
	}
}
?>