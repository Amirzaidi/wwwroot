<?php

$europe = new continent('Europe');

$country = country::continent($europe->id);
while ($country->next())
{
	echo $country->name, ': ', $country->desc, '<br/>';
}

?>