<?php
error_reporting(E_ALL);
ini_set('display_errors', 'On');

define('start', microtime(true));
define('root', __DIR__ . '/');

require root . 'classes/cron.php';
require root . 'classes/language.php';
require root . 'classes/mysql.php';
require root . 'classes/router.php';
require root . 'classes/session.php';
require root . 'classes/template.php';

// start permanent session
$session = new session();
if (!$session->started())
{
	$session->cronCheck = 0;
	$session->language = 'en';
	$session->theme = 'light';
	router::refresh();
}

// connect to localhost:3306/root
mysql::$models = 'models/';
mysql::connect('adm78', 'cso');

// check cron but block spam
if ($session->cronCheck < (time() - 1))
{
	cron::$crondir = 'cron/';
	cron::$maxRuns = 16;
	cron::checkAll();
	$session->cronCheck = time();
}

// url routing
router::$views = 'views/';
router::$index = 'index';
router::$error = '404';

$uri = $_SERVER['REQUEST_URI'];
$page = router::path($uri);

// auto-html template
$tpl = new template();
$tpl->title = 'CSO - ' . ucfirst($page);
$tpl->url = '127.0.0.1';

$css = ['/style/main.css', '/style/' . $session->theme . '.css'];
$js = ['http://code.jquery.com/jquery-1.10.2.min.js'];
$favicon = '/style/favicon.ico';

// translate with vars
language::$dir = 'lang/';

$language = new language($session->language);
$language->load($page);
$language->translate($tpl);

require root . router::$views . $page . '.php';

$tpl->end($css, $js, $favicon);

// millisecond counter (view source)
exit('<!--' . (round(microtime(true) - start, 5) * 1000) . 'ms-->');
?>