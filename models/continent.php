<?php
class continent extends mysql
{
	public function countries()
	{
		$stmt = parent::$conn->prepare('SELECT * FROM countries WHERE continent = ?');
		$stmt->bind_param('i', $this->id);

		return new country($stmt);
	}
}
?>