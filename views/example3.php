<?php

$europe = new continent('Europe');

$countries = country::continent($europe->id);
while ($countries->found())
{
	echo $countries->desc, '<br/>';
	$countries->desc .= '_';

	echo $countries->desc, '<br/>';
}

?>