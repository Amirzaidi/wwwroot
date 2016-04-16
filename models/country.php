<?php
class country extends mysql
{
	public static function stateSortVotes($state, $rows = '*')
	{
		$stmt = parent::$conn->prepare('SELECT ' . $rows . ' FROM country WHERE country_state = ? ORDER BY country_votes DESC');
		$stmt->bind_param('s', $state);
		return new self($stmt);
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
			$useIds[] = "`id` = '" . $ids[$useIdKey] . "'";

			unset($ids[$useIdKey]);
			$ids = array_values($ids);
		}

		$implode = implode(' OR ', $useIds);
		if (empty($implode))
		{
			$implode = 'LIMIT 0';
		}
		else
		{
			$implode = 'WHERE ' . $implode;
		}

		return new country(parent::$conn->prepare('SELECT * FROM `countries` ' . $implode));
	}

	public static function resetVotes()
	{
		parent::execute("UPDATE country SET country_votes = 0, country_state = 'queued'");
	}

	public function medals()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM medal WHERE country = ? ORDER BY medal_type ASC");
		$stmt->bind_param('i', $this->id);

		return new medal($stmt);
	}
}
?>