<?php
$c = new country('United Kingdom');
if ($c->found())
{
	echo '1: ', $c->desc, '<br/>';
	$c->delete();
}

new country([
	'id' => 2,
	'name' => 'United Kingdom',
	'desc' => 'Lets all drink tea!',
	'continent#' => 1
]);

$c2 = new country('United Kingdom');
if ($c2->found())
{
	echo '2: ', $c2->desc;
	$c2->desc .= ' yes!';
}

$c3 = new country('United Kingdom');
if ($c3->found())
{
	echo '3: ', $c3->desc;
}
?>