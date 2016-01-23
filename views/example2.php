<?php

$europe = new continent('Europe');

$country = country::continent($europe->id);
while ($country->found())
{
	echo $country->name, ': ', $country->desc, '<br/>';
}

?>