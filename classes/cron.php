<?php
class cron
{
	public static $crondir;
	public static $maxRuns;

	public static function checkAll()
	{
		$job = new cronjob();
		while ($job->found())
		{
			$runs = floor((time() - $job->lastrun) / $job->interval);
			if ($runs > 0)
			{
				$job->lastrun += ($runs * $job->interval); //asap!
				require root . self::$crondir . $job->name . '.php';

				for ($i = 0; $i < $runs && $i < self::$maxRuns; $i++)
				{
					call_user_func($job->name);
				}
			}
		}
	}

	public static function timeUntil($name)
	{
		$job = new cronjob($name);
		return ($job->lastrun + $job->interval - time());
	}
}
?>