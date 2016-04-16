<?php
echo cron::timeUntil('pickrandom'), 's until next update<br/>';
echo cron::timeUntil('clearvotes'), 's until next vote<br/>';

$contest = contest::active();
echo 'current contest: (', $contest->id, ') ', $contest->name, '<br/>';

$ip = router::ip();
$ipvote = new vote($ip);

$finalStarted = !country::stateSortVotes('active')->found();

if ($ipvote->found())
{
	echo 'you have previously voted for ', $ipvote->country->name, '<br/>';
}
else if (isset($uri[0]))
{
	if (ctype_digit($uri[0]))
	{
		$uri[0] = intval($uri[0]);
	}

	$country = new country($uri[0]);
	$found = $country->found();

	if (!$found)
	{
		$slang = new slang($uri[0]);
		if ($slang->found())
		{
			$country = $slang->country;
			$found = true;
		}
	}

	if ($found && ($country->state == 'active' || ($country->state == 'finale' && $finalStarted) ))
	{
		new vote([
			'ip' => $ip,
			'country#' => $country->id
		]);

		$country->votes++;
		$country->update();
		echo 'you have now voted for ', $country->name, '<br/>';
	}
	else
	{
		echo 'vote for ', $uri[0], ' was not recognised<br/>';
	}
}

$voteable = country::stateSortVotes('active');
if ($finalStarted)
{
	echo 'FINALE!<br/>';
	$voteable = country::stateSortVotes('finale');
}

while ($voteable->found())
{
	echo '<a href="/vote/', $voteable->id, '">', $voteable->name, ': ', $voteable->desc, '</a> ', $voteable->votes, ' (medals:';
	$medals = $voteable->medals();

	while ($medals->found())
	{
		echo ' ', $medals->contest->name, ' ', $medals->contest->id, ':', $medals->type, ';';
	}

	echo ')<br/>';
}
?>

<br/>END