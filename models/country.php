<?php
class country extends mysql
{
	protected function table()
	{
		return 'countries';
	}

	public static function continent($continent)
	{
		$stmt = parent::$conn->prepare('SELECT * FROM `countries` WHERE `continent` = ?');
		$stmt->bind_param('i', $continent);

		return new country($stmt);
	}

	public static function slang($text)
	{
		$stmt = parent::$conn->prepare('SELECT * FROM `countries` WHERE `id` IN (
			SELECT `country` FROM `slang` WHERE `text` = ?
		) OR `name` = ? LIMIT 1');

		$stmt->bind_param('ss', $text, $text);

		return new country($stmt);
	}
}
?>