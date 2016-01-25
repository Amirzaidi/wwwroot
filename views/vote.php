<?php
echo cron::timeUntil('pickrandom'), 's until next update<br/>';
echo cron::timeUntil('clearvotes'), 's until next vote<br/>';

$contest = contest::active();
echo 'current contest: (', $contest->id, ') ', $contest->name, '<br/>';

$ip = router::visitorIp();
$ipvote = new ipvote($ip);

$finalStarted = !country::activeSortVotes()->found();

if ($ipvote->found())
{
	$country = new country($ipvote->country);
	echo 'you have previously voted for ', $country->name, '<br/>';
}
else if (isset($uri[0]))
{
	$country = country::slang($uri[0]);

	if ($country->found() && ($country->state == 'active' || ($country->state == 'won' && $finalStarted) ))
	{
		new ipvote([
			'ip' => $ip,
			'country' => $country->id
		]);

		$country->votes++;
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
	echo '<a href="/vote/', $voteable->id, '">', $voteable->name, '</a> ', $voteable->votes, ' (medals:';
	$medals = $voteable->medals();

	while ($medals->found())
	{
		echo ' ', $medals->contest()->name, $medals->rank, ';';
	}

	echo ')<br/>';
}
?>