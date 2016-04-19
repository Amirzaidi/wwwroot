<?php
if (count($_POST) == 2)
{
	$continent = new continent($_POST);
	echo 'added ', $continent->name, '<br/>';
}

$nl = new slang('nl');
//var_dump($nl->country->continent->country());
echo $nl->country->continent->country()->count(), ' landen in nl continent';
?>

<form action="[url]" method="post">
	Name: <input type="text" name="name" /></br>
	Desc: <textarea name="desc"></textarea><br/>
	<input type="submit" />
</form>