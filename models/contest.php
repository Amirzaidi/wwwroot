<?php
class contest extends mysql
{
	public function table()
	{
		return 'contests';
	}

	public static function active()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `contests` WHERE `active` = '1' ORDER BY `id` DESC LIMIT 1");
		return new contest($stmt);
	}

	public static function nextActive()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM `contests` WHERE `active` = '0' ORDER BY `id` ASC LIMIT 1");
		$contest = new contest($stmt);

		if (!$contest->found())
		{
			$random = parent::$conn->prepare("SELECT * FROM `contests` WHERE `type` = 'manual' ORDER BY `repeats` ASC, RAND() LIMIT 1");
			$randcontest = new contest($random);
			$randcontest->repeats++;

			new contest([
				'name' => $randcontest->name,
				'desc' => $randcontest->desc,
				'type' => 'auto'
			]);

			return new contest($stmt);
		}

		return $contest;
	}
}
?>