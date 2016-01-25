<?php
function pickFromQueue()
{
	$queuedCountries = country::randomQueued(5);
	while ($queuedCountries->found())
	{
		$queuedCountries->state = 'active';
	}
}

function pickrandom()
{
	$active = contest::active();

	$activeCountries = country::activeSortVotes();
	if ($activeCountries->count() == 0) // finale has finished
	{
		$final = country::finalSortVotes();
		$finalCount = $final->count();

		for ($i = 1; $i <= 3 && $i <= $finalCount; $i++)
		{
			$final->found();

			new medal([
				'contest' => $active->id,
				'country' => $final->id,
				'votes' => $final->votes,
				'rank' => strval($i)
			]);
		}

		country::resetVotes();
		$active->end = time();

		$new = contest::nextActive();
		$new->active = '1';
		$new->start = time();

		pickFromQueue();
	}
	else
	{
		$activeCountries->state = 'won';
		$activeCountries->votes = 0;

		while ($activeCountries->found())
		{
			$activeCountries->state = 'lost';
		}

		pickFromQueue();
	}
}
?>