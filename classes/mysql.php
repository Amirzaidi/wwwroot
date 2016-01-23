<?php
abstract class mysql
{
	protected static $conn;

	public static function connect($pw, $db)
	{
		self::$conn = new mysqli('p:localhost', 'root', $pw, $db);
		spl_autoload_register('mysql::loadmodel');
	}

	public static function loadmodel($name)
	{
		require 'models/' . $name . '.php';
	}

	protected $stmt, $result, $row = false;

	public function __construct($value)
	{
		if (is_object($value))
		{
			$this->stmt = $value;
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

	protected abstract function table();

	protected function intKey()
	{
		return 'id';
	}

	protected function stringKey()
	{
		return 'name';
	}

	public function next()
	{
		$this->row = $this->result->fetch_object();
		return ($this->row !== null);
	}

	public function __get($key)
	{
		if ($this->row === false)
		{
			$this->next();
		}

		return $this->row->$key;
	}

	public function __set($updatekey, $updatevalue)
	{
		$type = gettype($updatevalue);
		$primarykey = $this->intKey();

		$update = self::$conn->prepare('UPDATE `' . $this->table() . '` SET `' . $updatekey . '` = ? WHERE `' . $primarykey . '` = ? LIMIT 1');
		$update->bind_param($type[0] . 'i', $updatevalue, $this->row->$primarykey);
		$update->execute();

		$this->row->$updatekey = $updatevalue;
	}
}
?>