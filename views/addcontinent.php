<?php
if (count($_POST) == 2)
{
	$continent = new continent($_POST);
	echo 'added ', $continent->name, '<br/>';
}

$nl = new slang('nl');
//echo $nl->country->continent->country()->name, '<br/>';
while ($nl->country->continent->country()->found())
{
	echo $nl->country->continent->country()->name, '<br/>';
}
?>

<form action="[url]" method="post">
	Name: <input type="text" name="name" /></br>
	Desc: <textarea name="desc"></textarea><br/>
	<input type="submit" />
</form>