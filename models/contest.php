<?php
class contest extends mysql
{
	public static function active()
	{
		$stmt = parent::$conn->prepare('SELECT * FROM contests WHERE contest_start <> 0 AND contest_end = 0 ORDER BY contest_id ASC LIMIT 1');
		return new contest($stmt);
	}

	public static function nextActive()
	{
		$stmt = parent::$conn->prepare("SELECT * FROM contests WHERE contest_start = 0 ORDER BY contest_id ASC LIMIT 1");
		$contest = new contest($stmt);

		if (!$contest->found())
		{
			$random = parent::$conn->prepare("SELECT contest_name, contest_desc FROM contests GROUP BY contest_name, contest_desc ORDER BY COUNT(*) ASC, RAND() LIMIT 1");
			$randcontest = new contest($random);

			new contest([
				'name' => $randcontest->name,
				'desc' => $randcontest->desc
			]);

			return new contest($stmt);
		}

		return $contest;
	}
}
?>