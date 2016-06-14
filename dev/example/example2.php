<?php

$europe = new continent('Europe');
$country = $europe->country();

while ($country->found())
{
	echo $country->name, ': ', $country->desc, '<br/>';
}

?>