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
		require root . self::$models . $name . '.php';
	}

	protected static function execute($query)
	{
		if (!self::$conn->real_query($query))
		{
			exit(self::$conn->error);
		}
	}

	protected $key, $keytype, $stmt, $result = false, $row = false, $updates = [];

	public function __construct($value = false)
	{
		$this->key = $this->intKey();
		$this->keytype = 'i';

		if (is_object($value))
		{
			$this->stmt = $value;
		}
		else if (is_array($value))
		{
			$this->prepareInsert($value);
		}
		else if ($value === false)
		{
			$this->stmt = self::$conn->prepare('SELECT * FROM `' . $this->table() . '`');
		}
		else
		{
			if (is_string($value))
			{
				$this->key = $this->stringKey();
				$this->keytype = 's';
			}
			else if (!is_int($value))
			{
				exit($this->table() . '~invalid keytype');
			}

			$this->stmt = self::$conn->prepare('SELECT * FROM `' . $this->table() . '` WHERE `' . $this->key . '` = ? LIMIT 1');
			if ($this->stmt === false)
			{
				exit(self::$conn->error);
			}

			$this->stmt->bind_param($this->keytype, $value);
		}

		$this->stmt->execute();
		if ($this->stmt->insert_id == 0)
		{
			$this->result = $this->stmt->get_result();
		}
		/*else
		{
			self::__construct($this->stmt->insert_id);
		}*/
	}

	private function prepareInsert(&$keyvalues)
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
			$keys[] = '`' . $key . '`';
			$values[] = &$value;
			$type = gettype($value);
			$types .= $type[0];
		}

		$this->stmt = self::$conn->prepare('INSERT INTO ' . $this->table() . ' (' . implode(', ', $keys) . ') VALUES (' . implode(', ', $qmarks) . ')');
		if (!$this->stmt)
		{
			exit(self::$conn->error);
		}

		array_unshift($values, $types);
		call_user_func_array([$this->stmt, 'bind_param'], $values);
	}

	protected abstract function table();

	protected function intKey()
	{
		return 'id';
	}

	protected function stringKey()
	{
		return 'name';
	}

	public function found()
	{
		$this->update();

		if ($this->result === false)
		{
			echo 'no result';
			return false;
		}

		$this->row = $this->result->fetch_assoc();
		return ($this->row !== null);
	}

	public function count()
	{
		return $this->result->num_rows;
	}

	public function __get($key)
	{
		if ($this->row === false)
		{
			$this->found();
		}

		if (!isset($this->row[$key]))
		{
			echo 'warning: key ', $key, 'not found';
			return null;
		}

		if (isset($this->updates[$key]))
		{
			return $this->updates[$key];
		}

		return $this->row[$key];
	}

	public function __set($updatekey, $updatevalue)
	{
		/*if ($this->row !== false)
		{
			$type = gettype($updatevalue);
			$primarykey = $this->intKey();

			$update = self::$conn->prepare('UPDATE `' . $this->table() . '` SET `' . $updatekey . '` = ? WHERE `' . $primarykey . '` = ? LIMIT 1');
			$update->bind_param($type[0] . 'i', $updatevalue, $this->row->$primarykey);
			$update->execute();

			$this->row->$updatekey = $updatevalue;
		}*/

		if ($this->row === false)
		{
			$this->found();
		}

		$this->updates[$updatekey] = $updatevalue;
	}

	public function delete()
	{
		$delete = self::$conn->prepare('DELETE FROM `' . $this->table() . '` WHERE `' . $this->key . '` = ? LIMIT 1');
		$delete->bind_param($this->keytype, $this->row[$this->key]);
		$delete->execute();

		$this->row = null;
	}

	public function update()
	{
		if (is_array($this->row) && $this->updates !== [])
		{
			$primarykey = $this->intKey();
			$keys = [];
			$values = [''];

			foreach ($this->updates as $key => &$value)
			{
				$keys[] = '`' . $key . '` = ?';

				$type = gettype($value);
				$values[0] .= $type[0];
				$values[] = &$value;
			}

			$values[0] .= $this->keytype;
			$values[] = &$this->row[$this->key];

			$update = self::$conn->prepare('UPDATE `' . $this->table() . '` SET ' . implode($keys, ', ') . ' WHERE `' . $this->key . '` = ? LIMIT 1');
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