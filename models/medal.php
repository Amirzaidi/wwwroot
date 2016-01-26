<?php
class medal extends mysql
{
	public function table()
	{
		return 'medals';
	}

	public function contest()
	{
		return new contest($this->contest);
	}
}
?>