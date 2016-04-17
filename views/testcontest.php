<?php
if (count($_POST) == 2)
{
	$contest = new contest($_POST);
	echo 'added ', $contest->name, '<br/>';
}
?>

<form action="[url]" method="post">
	Name: <input type="text" name="name" /></br>
	Desc: <textarea name="desc"></textarea><br/>
	<input type="submit" />
</form>