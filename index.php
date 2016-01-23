<?php
require 'classes/mysql.php';

mysql::connect('adm78', 'cso');

$uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri = explode('/', ltrim($uri[0], '/'));

if (empty($uri[0]))
{
	$uri[0] = 'index';
}

if (!file_exists('views/' . $uri[0] . '.php'))
{
	$file = '404';
}
else
{
	$file = array_shift($uri);
}

require 'views/' . $file . '.php';
?>