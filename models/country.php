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

	public static function randomQueued($limit)
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `countries` WHERE `state` = 'queue' ORDER BY RAND() LIMIT ?");
		$stmt->bind_param('i', $limit);

		return new country($stmt);
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