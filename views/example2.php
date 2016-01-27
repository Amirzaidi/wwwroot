<?php

$europe = new continent('Europe');
$country = $europe->countries();

while ($country->found())
{
	echo $country->name, ': ', $country->desc, '<br/>';
}

?>