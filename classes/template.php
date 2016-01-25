<?php
class template
{
	private $vars = [];

	public function __construct()
	{
		ob_start();
	}

	public function __set($key, $value)
	{
		$this->vars['[' . $key . ']'] = $value;
	}

	public function end($css, $js, $fav)
	{
		$t = chr(9);
		$b = chr(10);
		$cssCount = count($css);
		$jsCount = count($js);

		$data = '<!DOCTYPE html>' . $b;
		$data .= '<html>' . $b;
		$data .= '<head>' . $b;
			$data .= $t . '<title>[title]</title>' . $b;
			$data .= $t . '<link rel="shortcut icon" type="image/x-icon" href="' . $fav . '" />' . $b;
		for ($i = 0; $i < $cssCount; $i++)
			$data .= $t . '<link rel="stylesheet" type="text/css" href="' . $css[$i] . '" />' . $b;
		for ($i = 0; $i < $jsCount; $i++)
			$data .= $t . '<script src="' . $js[$i] . '" type="text/javascript"></script>' . $b;
		$data .= '</head>' . $b;
		$data .= '<body>' . $b;
			$data .= str_replace($b, $b . $t, ob_get_clean()) . $b;
		$data .= '</body>' . $b;
		$data .= '</html>' . $b;

		echo strtr($data, $this->vars);
		unset($data, $this->vars);
	}
}
?>