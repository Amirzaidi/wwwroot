<?php
class ipvote extends mysql
{
	protected function table()
	{
		return 'ipvotes';
	}

	protected function intKey()
	{
		return 'ip';
	}

	public static function exists($ip)
	{
		$vote = new ipvote(ip2long($ip));
		return $vote->found();
	}

	public static function insert($ip)
	{

	}

	public static function clear()
	{
		
	}
}
?>