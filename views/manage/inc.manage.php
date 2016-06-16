<?php
if (isset($uri[0]) && $uri[0] == 'cso78')
{
	$session->admin = true;
}

if (!$session->admin)
{
	router::redirect('/');
}

$css = ['/dev/themes/material/main.css', '/dev/themes/material/white.css'];
?>
<div id="nav" class="main">
	<a href="#"><div></div></a>
	<a href="#nav"><div></div></a>
	<div class="medium">
		<?php
		foreach ($nav as $navelement)
		{
		?>
		<a href="<?php echo $navelement[0]; ?>">
			<div>
				<div><?php echo $navelement[1]; ?></div>
				<div><?php echo $navelement[2]; ?></div>
			</div>
		</a>
		<?php
		}
		?>
		<a href="/manage/contest">
			<div>
				<div>Contest</div>
				<div>Show and add contests</div>
			</div>
		</a>
		<a href="/manage/country">
			<div>
				<div>Country</div>
				<div>Show, add and edit countries</div>
			</div>
		</a>
		<a href="/manage/continent">
			<div>
				<div>Continent</div>
				<div>Show, add and edit continents</div>
			</div>
		</a>
		<a href="/manage/contact">
			<div>
				<div>Contact</div>
				<div>Show and dismiss contact requests</div>
			</div>
		</a>
		<a href="/">
			<div>
				<div>Return</div>
				<div>Show, add and edit continents</div>
			</div>
		</a>
	</div>
</div>