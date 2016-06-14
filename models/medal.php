<?php
class medal extends mysql
{
	public function typeCounts()
	{
		$count = [0, 0, 0];
		while ($this->found())
		{
			if ($this->type == 'gold')
			{
				$count[0]++;
			}
			else if ($this->type == 'silver')
			{
				$count[1]++;
			}
			else
			{
				$count[2]++;
			}
		}

		return $count;
	}
}
?>