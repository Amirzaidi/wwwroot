<?php
if (count($_POST) == 2)
{
	$_POST['active'] = '0';
	$_POST['type'] = 'manual';

	new contest($_POST);

	echo 'added<br/>';
}
?>

<form action="/queuecontest" method="post">
	Name: <input type="text" name="name" /></br>
	Desc: <textarea name="desc"></textarea><br/>
	<input type="submit" />
</form>