<?php
class contest extends mysql
{
	public function table()
	{
		return 'contests';
	}

	public static function active()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `contests` WHERE `active` = '1' ORDER BY `start` DESC LIMIT 1");
		return new contest($stmt);
	}

	public static function nextActive()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `contests` WHERE `active` = '0' ORDER BY `id` ASC LIMIT 1");

		$contest = new contest($stmt);
		if (!$contest->found())
		{
			$active = self::active();

			new contest([
				'name' => $active->name,
				'desc' => $active->desc
			]);

			return new contest($stmt);
		}

		return $contest;
	}
}
?>