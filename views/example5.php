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
	'continent' => 1,
	'desc' => 'Lets all drink tea!'
]);

$c2 = new country('United Kingdom');
if ($c2->found())
{
	echo '2: ', $c2->desc;
	$c2->desc .= 'yes!';
}

?>