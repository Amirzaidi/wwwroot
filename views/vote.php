<?php
if (isset($uri[0]))
{
	$slang = new slang($uri[0]);
	if ($slang->found())
	{
		router::redirect('/index/' . $slang->country->id);
	}
	else
	{
		router::redirect('/');
	}
}
?>