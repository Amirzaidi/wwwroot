<?php
class template
{
	private $tplvars;

	public function __construct($vars)
	{
		foreach ($vars as $key => $value)
		{
			$this->tplvars['{' . $key . '}'] = $value;
		}

		ob_start();
	}

	public function end()
	{
		$data = '<!DOCTYPE html>';
		$data .= '<html>';
		$data .= ob_get_clean();
		$data .= '</html>';

		echo strtr($data, $this->tplvars);
		unset($data, $this->tplvars);
	}
}
?>