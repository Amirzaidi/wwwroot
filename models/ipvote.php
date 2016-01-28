<?php
class ipvote extends mysql
{
	protected function table()
	{
		return 'ipvotes';
	}

	protected function stringKey()
	{
		return 'ip';
	}

	public static function clear()
	{
		//parent::execute('TRUNCATE TABLE ipvotes');
		//Truncate is extremely slow

		parent::execute('DELETE FROM ipvotes');
	}
}
?>