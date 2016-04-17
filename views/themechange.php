<?php
if ($session->theme == 'light')
{
	$session->theme = 'dark';
}
else
{
	$session->theme = 'light';
}

router::redirect($session->lastpage);
?>