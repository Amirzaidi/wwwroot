<?php
$all = new country();
while ($all->found())
{
	echo $all->name, '<br/>';
}
?>