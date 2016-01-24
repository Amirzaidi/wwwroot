<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('time', time());
define('root', __DIR__ . '/');

require root . 'classes/cron.php';
require root . 'classes/mysql.php';
require root . 'classes/router.php';
require root . 'classes/session.php';
require root . 'classes/template.php';

// connect to localhost:3306/root
mysql::$models = 'models/';
mysql::connect('adm78', 'cso');

// start permanent session
$session = new session();
$session->default('cronCheck', 0);

// check cron but block spam
if ($session->cronCheck < (time() - 1))
{
	cron::$crondir = 'cron/';
	cron::$maxRuns = 10;
	cron::checkAll();
	$session->cronCheck = time();
}

// url routing + template system
router::$views = 'views/';
router::$index = 'index';
router::$error = 'error';

$tpl = new template([
	'url' => 'www.cso.com'
]);

$uri = $_SERVER['REQUEST_URI'];
require router::path($uri);

$tpl->end();
?>