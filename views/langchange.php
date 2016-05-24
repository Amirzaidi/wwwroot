<?php
if (isset($uri[0]) && language::exists($uri[0]))
{
	$session->language = $uri[0];
	router::redirect($session->lastpage);
}
?>

<a href="/langchange/en">en</a>
<a href="/langchange/nl">nl</a>
<a href="/langchange/ar">ar</a>