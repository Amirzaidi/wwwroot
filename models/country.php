<?php
class country extends mysql
{
	protected function table()
	{
		return 'countries';
	}

	public static function finalSortVotes()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `countries` WHERE `state` = 'won' ORDER BY `votes` DESC");
		return new country($stmt);
	}

	public static function activeSortVotes()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `countries` WHERE `state` = 'active' ORDER BY `votes` DESC");
		return new country($stmt);
	}

	public static function fiveQueued()
	{
		$stmt = parent::$conn->prepare("SELECT `id` FROM `countries` WHERE `state` = 'queue'");
		$countries = new country($stmt);

		$ids = [];
		while ($countries->found())
		{
			$ids[] = $countries->id;
		}

		$useIds = [];
		for ($i = 0; $i < 5 && $i < $countries->count(); $i++)
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
		parent::execute("UPDATE `countries` SET `votes` = 0, `state` = 'queue'");
	}

	public function medals()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `medals` WHERE `country` = ? ORDER BY rank ASC");
		$country_id = $this->id;
		$stmt->bind_param('i', $country_id);

		return new medal($stmt);
	}
}
?>