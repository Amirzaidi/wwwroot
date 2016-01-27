<?php

$europe = new continent('Europe');
$country = $europe->countries();

while ($country->found())
{
	echo $country->desc, '<br/>';
	$country->desc .= '_';

	echo $country->desc, '<br/>';
}

?>