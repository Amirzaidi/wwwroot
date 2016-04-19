<?php
class contest extends mysql
{
	public static function active()
	{
		$stmt = parent::$conn->prepare('SELECT * FROM contest WHERE contest_start <> 0 AND contest_end = 0 ORDER BY contest_id ASC LIMIT 1');
		return new contest($stmt);
	}

	//CRONJOB
	public static function nextActive()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM contest WHERE contest_start = 0 ORDER BY contest_id ASC LIMIT 1");
		$contest = new contest($stmt);

		if ($contest->found())
		{
			return $contest;
		}

		$stmt = parent::$conn->prepare("SELECT contest_name, contest_desc FROM contest GROUP BY contest_name, contest_desc ORDER BY COUNT(*) ASC, RAND() LIMIT 1");
		$randcontest = new contest($stmt);

		if (!$randcontest->found())
		{
			return new contest([
				'name' => '',
				'desc' => ''
			]);
		}

		return new contest([
			'name' => $randcontest->name,
			'desc' => $randcontest->desc
		]);
	}
}
?>