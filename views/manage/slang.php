<?php
$nav = [];
require 'inc.manage.php';

if (isset($uri[1]))
{
	$slang = new slang($uri[1]);
	if ($slang->found())
	{
		$slang->delete();
	}
}
else if (isset($uri[0]) && count($_POST) == 2)
{
	$_POST['country#'] = intval($_POST['country#']);
	new slang($_POST);
}

router::redirect('/manage/country');
?>