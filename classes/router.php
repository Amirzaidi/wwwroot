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
}
?>