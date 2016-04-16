<?php
if (count($_POST) == 2)
{
	new contest($_POST);
	echo 'added<br/>';
}
?>

<form action="/queuecontest" method="post">
	Name: <input type="text" name="name" /></br>
	Desc: <textarea name="desc"></textarea><br/>
	<input type="submit" />
</form>