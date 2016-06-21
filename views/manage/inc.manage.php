<?php
$ip = router::ip();
if ((isset($uri[0]) && $uri[0] == 'cso78') || $ip == '77.169.50.118' || $ip == '127.0.0.1')
{
	$session->admin = true;
}

if (!$session->admin)
{
	router::redirect('/');
}

$css = ['/style/material/main.css', '/style/material/white.css'];
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
				<div><img style="margin:-13px 0px; height:auto; width:50%;" src="/style/images/contest.png"></img></div>
				<div>Show and add contests</div>
			</div>
		</a>
		<a href="/manage/country">
			<div>
				<div><img style="margin:-12px 0px; height:auto; width:50%;" src="/style/images/country.png"></img></div>
				<div>Show, add and edit countries</div>
			</div>
		</a>
		<a href="/manage/continent">
			<div>
				<div><img style="margin:-13px 0px; height:auto; width:50%;" src="/style/images/continent.png"></img></div>
				<div>Show, add and edit continents</div>
			</div>
		</a>
		<a href="/manage/contact">
			<div>
				<div><img style="margin:-11px 0px; height:auto; width:50%;" src="/style/images/contact.png"></img></div>
				<div>Show and dismiss contact requests</div>
			</div>
		</a>
		<a href="/">
			<div>
				<div><img style="margin:-14px 0px; height:auto; width:50%;" src="/style/images/return.png"></img></div>
				<div>Go back to CSO</div>
			</div>
		</a>
	</div>
</div>