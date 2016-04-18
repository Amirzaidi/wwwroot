<?php
class country extends mysql
{
	public static function stateSortVotes($state, $rows = '*')
	{
		$stmt = parent::$conn->prepare('SELECT ' . $rows . ' FROM country WHERE country_state = ? ORDER BY country_votes DESC');
		$stmt->bind_param('s', $state);
		return new self($stmt);
	}

	public static function voteable($rows = '*')
	{
		$activeCountries = self::stateSortVotes('active');
		if ($activeCountries->count() == 0) // finale has finished
		{
			return country::stateSortVotes('finale');
		}

		return $activeCountries;
	}

	public static function randQueued($count)
	{
		$countries = self::stateSortVotes('queued', 'country_id');

		$ids = [];
		while ($countries->found())
		{
			$ids[] = $countries->id;
		}

		$useIds = [];
		for ($i = 0; $i < $count && $i < $countries->count(); $i++)
		{
			$useIdKey = rand(0, count($ids) - 1);
			$useIds[] = 'country_id = ' . $ids[$useIdKey];

			unset($ids[$useIdKey]);
			$ids = array_values($ids);
		}

		if (!isset($useIds[0]))
		{
			$implode = 'LIMIT 0';
		}
		else
		{
			$implode = 'WHERE ' . implode(' OR ', $useIds);
		}

		$stmt = parent::$conn->prepare('SELECT * FROM country ' . $implode);
		return new country($stmt);
	}

	public static function resetVotes()
	{
		parent::execute("UPDATE country SET country_votes = 0, country_state = 'queued'");
	}
}
?>