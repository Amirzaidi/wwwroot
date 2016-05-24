<?php
class session
{
	private $defaults = [];
	
	public function __construct()
	{
		//Session lasts a week
		@session_start(['cookie_lifetime' => 24 * 60 * 60]);
		session_cache_expire(24 * 60);
	}

	public function started()
	{
		return isset($_COOKIE['PHPSESSID']) && count($_SESSION) !== 0;
	}

	public function close()
	{
		session_destroy();
	}

	public function __get($key)
	{
		if (!isset($_SESSION[$key]))
		{
			return null;
		}

		return $_SESSION[$key];
	}

	public function __set($key, $value)
	{
		$_SESSION[$key] = $value;
	}

	public function __isset($key)
	{
		return isset($_SESSION[$key]);
	}

	public function __unset($key)
	{
		if (isset($_SESSION[$key]))
		{
			unset($_SESSION[$key]);
		}
	}
}
?>