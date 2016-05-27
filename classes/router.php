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

		for ($i = count($uri); $i > 0; $i--)
		{
			$page = implode('/', array_slice($uri, 0, $i));
			if (file_exists(self::$views . $page . '.php'))
			{
				$uri = array_slice($uri, $i);
				return $page;
			}

		}

		return self::$error;
	}

	public static function ip()
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

	public static function redirect($url)
	{
		header('Location: ' . $url);
		exit();
	}

	public static function refresh()
	{
		self::redirect($_SERVER['REQUEST_URI']);
	}
}
?>