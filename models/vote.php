<?php
class vote extends mysql
{
	protected function stringKey()
	{
		return 'ip';
	}

	public static function clear()
	{
		//parent::execute('TRUNCATE TABLE ipvotes');
		//Truncate is extremely slow

		parent::execute('DELETE FROM vote');
	}
}
?>