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

	protected $table, $pkey, $pkeytype, $stmt, $result = false, $row = false, $updates = [];

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
			if (is_array($value))
			{
				$this->insert($value);
				$value = $this->stmt->insert_id;
			}

			if (is_string($value))
			{
				$this->pkey = $this->resolve($this->stringKey());
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

	public function found()
	{
		$this->update();

		if ($this->result === false)
		{
			echo 'NO RESULT';
			return false;
		}

		$this->row = $this->result->fetch_assoc();
		return ($this->row !== null);
	}

	public function count()
	{
		return $this->result->num_rows;
	}

	public function &__get($key)
	{
		if ($this->row === false)
		{
			$this->found();
		}

		if (isset($this->row[$key]))
		{
			$result = new $key($this->row[$key]);
		}
		else if (isset($this->row[$this->table . '_' . $key]))
		{
			$result = $this->row[$this->table . '_' . $key];
		}
		else
		{
			echo 'warning: key ', $key, 'not found in ', $this->table;
			$result = null;
		}

		return $result;
	}

	public function __set($key, $value)
	{
		if ($this->row === false)
		{
			$this->found();
		}

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

			$values[0] .= $this->pkeytype;
			$values[] = &$this->row[$this->pkey];

			$update = self::$conn->prepare('UPDATE ' . $this->table . ' SET ' . implode($keys, ', ') . ' WHERE ' . $this->pkey . ' = ? LIMIT 1');
			call_user_func_array([$update, 'bind_param'], $values);
			$update->execute();

			$this->updates = [];
		}
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