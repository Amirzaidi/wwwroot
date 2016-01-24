<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

define('start', microtime(true));
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
$session->setDefault('cronCheck', 0);

// check cron but block spam
if ($session->cronCheck < (time() - 1))
{
	cron::$crondir = 'cron/';
	cron::$maxRuns = 10;
	cron::checkAll();
	$session->cronCheck = time();
}

// url routing
router::$views = 'views/';
router::$index = 'index';
router::$error = '404';

$uri = $_SERVER['REQUEST_URI'];
$path = router::path($uri);

// auto-html template
$tpl = new template();
$tpl->title = 'www.CountriesStandOff.com';
$tpl->url = '127.0.0.1';

$css = ['/style/main.css'];
$js = ['http://code.jquery.com/jquery-1.10.2.min.js'];
$favicon = '/style/favicon.ico';

require $path;

$tpl->end($css, $js, $favicon);

// millisecond counter (view source)
echo '<!--', round(microtime(true) - start, 5) * 1000, 'ms-->';
?>