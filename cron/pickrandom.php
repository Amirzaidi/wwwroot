<?php
function pickFromQueue()
{
	$queuedCountries = country::randQueued(4);

	while ($queuedCountries->found())
	{
		$queuedCountries->state = 'active';
	}
}

function pickrandom($time)
{
	$active = contest::active();
	$activeCountries = country::stateSortVotes('active');
	if ($activeCountries->count() == 0) // finale has finished
	{
		$final = country::stateSortVotes('finale');
		$finalCount = $final->count();

		$ranks = [
			1 => 'gold',
			2 => 'silver',
			3 => 'bronze'
		];

		for ($i = 1; $i <= 3 && $i <= $finalCount; $i++)
		{
			$final->found();

			new medal([
				'type' => $ranks[$i],
				'votes' => $final->votes,
				'contest#' => $active->id,
				'country#' => $final->id
			]);
		}

		country::resetVotes();
		$active->end = $time;

		$new = contest::nextActive();
		$new->start = $time;
		$new->update();

		pickFromQueue();
	}
	else
	{
		$activeCountries->state = 'finale';
		$activeCountries->votes = 0;

		while ($activeCountries->found())
		{
			$activeCountries->state = 'eliminated';
		}

		pickFromQueue();
	}
}
?>