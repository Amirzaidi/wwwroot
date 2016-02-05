<?php
echo cron::timeUntil('pickrandom'), 's until next update<br/>';
echo cron::timeUntil('clearvotes'), 's until next vote<br/>';

$contest = contest::active();
echo 'current contest: (', $contest->id, ') ', $contest->name, '<br/>';

$ip = router::ip();
$ipvote = new ipvote($ip);

$finalStarted = !country::activeSortVotes()->found();

if ($ipvote->found())
{
	$country = new country($ipvote->country);
	echo 'you have previously voted for ', $country->name, '<br/>';
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
			$country = $slang->country();
			$found = true;
		}
	}

	if ($found && ($country->state == 'active' || ($country->state == 'won' && $finalStarted) ))
	{
		new ipvote([
			'ip' => $ip,
			'country' => $country->id
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

$voteable = country::activeSortVotes();
if ($finalStarted)
{
	echo 'FINALE!<br/>';
	$voteable = country::finalSortVotes();
}

while ($voteable->found())
{
	echo '<a href="/vote/', $voteable->id, '">', $voteable->name, ': ', $voteable->desc, '</a> ', $voteable->votes, ' (medals:';
	$medals = $voteable->medals();

	while ($medals->found())
	{
		echo ' ', $medals->contest()->name, $medals->contest, ':', $medals->rank, ';';
	}

	echo ')<br/>';
}
?>