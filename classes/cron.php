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
				$lastrun = $job->lastrun;

				//Update quickly to prevent cron reruns
				$job->lastrun += ($runs * $job->interval);
				$job->update();

				require self::$crondir . $job->name . '.php';

				for ($i = 1; $i <= $runs && $i <= self::$maxRuns; $i++)
				{
					call_user_func($job->name, $lastrun + $i * $job->interval);
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