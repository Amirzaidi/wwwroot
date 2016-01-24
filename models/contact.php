<?php
class contact extends mysql
{
	protected function table()
	{
		return 'contact';
	}

	protected function stringKey()
	{
		return 'ip';
	}
}
?>