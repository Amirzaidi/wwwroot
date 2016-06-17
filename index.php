<?php
$debug = true;
if ($debug)
{
	error_reporting(E_ALL);
	ini_set('display_errors', 'On');
}

define('start', microtime(true));
define('root', __DIR__ . '/');
define('classes', root . 'classes/');

require classes . 'cron.php';
require classes . 'language.php';
require classes . 'mysql.php';
require classes . 'router.php';
require classes . 'session.php';
require classes . 'template.php';

// start permanent session
$session = new session();
if (!$session->started())
{
	$session->cronCheck = 0;
	$session->language = 'en';
	$session->theme = 'light';
	$session->lastpage = '/';
	$session->admin = false;
	$session->translate = true;
	router::refresh();
}

// connect to localhost:3306/root
mysql::$models = root . 'models/';
mysql::connect('usbw', 'csodb');

// check cron but block spam
if ($debug || $session->cronCheck < (time() - 3))
{
	cron::$crondir = root . 'cron/';
	cron::$maxRuns = 16;
	cron::checkAll();
	$session->cronCheck = time();
}

// url routing
router::$views = root . 'views/';
router::$index = 'index';
router::$error = '404';

$uri = $_SERVER['REQUEST_URI'];
$page = router::path($uri);

// auto-html template
$tpl = new template();
$tpl->url = $_SERVER['REQUEST_URI'];

$css = ['/style/main.css', '/style/' . $session->theme . '.css'];
$js = ['http://code.jquery.com/jquery-1.10.2.min.js'];
$favicon = '/style/favicon.ico';

// translate with vars
language::$dir = root . 'lang/';

$language = new language($session->language);
$language->load($page);

require router::$views . $page . '.php';
$tpl->title = 'CSO - ' . ucwords(str_replace('/', ' ', $page));

$language->translate($tpl);
$tpl->end($css, $js, $favicon);

if ($page != router::$error)
{
	$session->lastpage = $_SERVER['REQUEST_URI'];
}

// millisecond counter (view source)
exit('<!--' . (round(microtime(true) - start, 5) * 1000) . 'ms-->');
?>