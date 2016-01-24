<?php
class router
{
	public static $views;
	public static $index;
	public static $error;

	public static function path(&$uri)
	{
		$uri = explode('?', $uri, 2);
		$uri = explode('/', ltrim($uri[0], '/'));

		if (empty($uri[0]))
		{
			$uri[0] = self::$index;
		}

		if (!file_exists(root . self::$views . $uri[0] . '.php'))
		{
			$file = self::$error;
		}
		else
		{
			$file = array_shift($uri);
		}

		return root . self::$views . $file . '.php';
	}

	public static function visitorIp()
	{
		if (!empty($_SERVER['HTTP_X_FORWARDED_FOR']))
		{
			exit('Proxy not allowed.');
		}

		if ($_SERVER['REMOTE_ADDR'] == '::1')
		{
			return '127.0.0.1';
		}

		return $_SERVER['REMOTE_ADDR'];
	}
}
?>