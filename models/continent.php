<?php
class continent extends mysql
{
	protected function table()
	{
		return 'continents';
	}

	public function countries()
	{
		$stmt = parent::$conn->prepare('SELECT * FROM `countries` WHERE `continent` = ?');
		$continent_id = $this->id;
		$stmt->bind_param('i', $continent_id);

		return new country($stmt);
	}
}
?>