<?php
class slang extends mysql
{
	protected function table()
	{
		return 'slang';
	}

	protected function stringKey()
	{
		return 'slang';
	}

	public function country()
	{
		$stmt = parent::$conn->prepare('SELECT * FROM `countries` WHERE `id` = ? LIMIT 1');
		$stmt->bind_param('i', $this->country);

		return new country($stmt);
	}
}
?>