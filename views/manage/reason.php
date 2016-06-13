<?php
$nav = [];
require 'inc.manage.php';

if (isset($uri[1]) && is_numeric($uri[1]))
{
	$reason = new reason(intval($uri[1]));
	if ($reason->found())
	{
		$reason->delete();
	}
}
else if (isset($uri[0]) && count($_POST) == 3)
{
	new reason($_POST);
}

router::redirect('/manage/country');
?>