<?php

$ip = $_SERVER['REMOTE_ADDR'];
if ($ip == '::1')
{
	$ip = '127.0.0.1';
}

//ipvote::clear();

$ipvote = new ipvote($ip);
if ($ipvote->found())
{
	$country = new country($ipvote->country);
	echo 'you have previously voted for ', $country->name;
}
else if (isset($uri[1]) && $uri[0] == 'vote')
{
	$country = country::slang($uri[1]);

	if ($country->found())
	{
		new ipvote([
			'ip' => $ip,
			'country' => $country->id
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