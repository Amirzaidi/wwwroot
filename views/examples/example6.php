<?php
$ip = router::ip();

$ipvote = new vote($ip);
if ($ipvote->found())
{
	echo 'you have previously voted for ', $ipvote->country->name;
}
else if (isset($uri[1]) && $uri[0] == 'vote')
{
	$country = country::slang($uri[1]);

	if ($country->found())
	{
		new vote([
			'ip' => $ip,
			'country#' => $country->id
		]);

		echo 'you have now voted for ', $country->name;
	}
	else
	{
		echo 'slang term ', $uri[1], ' was not recognised';
	}
}
else
{
	echo 'not voted yet';
}
?>