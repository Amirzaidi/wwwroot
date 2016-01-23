<?php
require 'classes/mysql.php';

mysql::connect('adm78', 'cso');

$uri = explode('?', $_SERVER['REQUEST_URI'], 2);
$uri = explode('/', ltrim($uri[0], '/'));

if (file_exists('views/' . $uri[0] . '.php'))
{
	require 'views/' . $uri[0] . '.php';
}
else
{
	echo $uri[0], ' not found';
}
?>