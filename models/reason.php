<?php
class reason extends mysql
{
	protected function clauses()
	{
		return 'ORDER BY reason_name ASC';
	}
}
?>