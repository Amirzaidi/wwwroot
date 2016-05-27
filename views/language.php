<?php
if (isset($uri[0]) && language::exists($uri[0]))
{
	$session->language = $uri[0];
	router::redirect($session->lastpage);
}

router::redirect('/');
?>