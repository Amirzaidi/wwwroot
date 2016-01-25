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

	protected $stmt, $result, $row = false;

	public function __construct($value = false)
	{
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
			if (is_int($value))
			{
				$type = 'i';
				$key = $this->intKey();
			}
			else if (is_string($value))
			{
				$type = 's';
				$key = $this->stringKey();
			}
			else
			{
				exit($this->table() . '~invalid value');
			}

			$this->stmt = self::$conn->prepare('SELECT * FROM `' . $this->table() . '` WHERE `' . $key . '` = ? LIMIT 1');
			if ($this->stmt === false)
			{
				exit(self::$conn->error);
			}

			$this->stmt->bind_param($type, $value);
		}

		$this->stmt->execute();
		$this->result = $this->stmt->get_result();
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
		$this->row = $this->result->fetch_object();
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

		if (!isset($this->row->$key))
		{
			exit('key ' . $key . ' not in ' . $this->table());
		}

		return $this->row->$key;
	}

	public function __set($updatekey, $updatevalue)
	{
		if ($this->row === false)
		{
			$this->found();
		}

		if ($this->row !== null)
		{
			$type = gettype($updatevalue);
			$primarykey = $this->intKey();

			$update = self::$conn->prepare('UPDATE `' . $this->table() . '` SET `' . $updatekey . '` = ? WHERE `' . $primarykey . '` = ? LIMIT 1');
			$update->bind_param($type[0] . 'i', $updatevalue, $this->row->$primarykey);
			$update->execute();

			$this->row->$updatekey = $updatevalue;
		}
	}

	public function delete()
	{
		$primarykey = $this->intKey();

		$delete = self::$conn->prepare('DELETE FROM `' . $this->table() . '` WHERE `' . $primarykey . '` = ? LIMIT 1');
		$delete->bind_param('i', $this->row->$primarykey);
		$delete->execute();

		$this->row = null;
	}
}
?>