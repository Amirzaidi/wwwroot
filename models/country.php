<?php
class country extends mysql
{
	protected function table()
	{
		return 'countries';
	}

	/*
	protected function intKey()
	{
		return 'id';
	}

	protected function stringKey()
	{
		return 'name';
	}
	*/

	public static function continent($continent)
	{
		$stmt = self::$conn->prepare('SELECT * FROM `countries` WHERE `continent` = ?');
		$stmt->bind_param('i', $continent);
		return new country($stmt);
	}
}
?>