<?php
class session
{
	private $defaults = [];
	
	public function __construct()
	{
		session_start();
	}

	public function setDefault($key, $value)
	{
		$this->defaults[$key] = $value;
	}

	public function close()
	{
		session_destroy();
	}

	public function __get($key)
	{
		if (!isset($_SESSION[$key]))
		{
			if (isset($this->defaults[$key]))
			{
				$_SESSION[$key] = $this->defaults[$key];
			}
			else
			{
				return null;
			}
		}

		return $_SESSION[$key];
	}

	public function __set($key, $value)
	{
		if ($value === null)
		{
			unset($_SESSION[$key]);
		}
		else
		{
			$_SESSION[$key] = $value;
		}
	}
}
?>