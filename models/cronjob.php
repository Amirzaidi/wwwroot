<?php
class cronjob extends mysql
{
	protected function table()
	{
		return 'cronjobs';
	}

	protected function stringKey()
	{
		return 'name';
	}
}
?>