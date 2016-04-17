<?php
$europe = new continent('Europe');

echo $europe->name, ' has ', $europe->count('country'), ' countries<br/>';
$country = $europe->country();
for ($i = 0; $i < 3; $i++)
{
	while ($country->found())
	{
		echo $country->name, ': ', $country->desc, '<br/>';
	}

	echo '<br/>';
}
?>