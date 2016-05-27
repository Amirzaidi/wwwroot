<?php
$europe = new continent('Europe');
$country = $europe->country();

echo $europe->name, ' has ', $country->count(), ' countries<br/>';
for ($i = 0; $i < 3; $i++)
{
	while ($country->found())
	{
		echo $country->name, ': ', $country->desc, '<br/>';
	}

	echo '<br/>';
}
?>