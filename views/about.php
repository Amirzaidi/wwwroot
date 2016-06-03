<?php
$ip = router::Ip();

$contact = new contact($ip);

if (count($_POST) == 3 && !$contact->found())
{
	$_POST['ip'] = $ip;
	new contact($_POST);
}
?>

<?php require 'inc.nav.php'; ?>

<div class="header">
	<div class="imgheadcon">
		<div class="webstar">
			<img src="/style/images/aboutus.png"></img>
		</div>
	</div>
</div>

<div class="whiterow">
	<div class="headconbody">
		<div class="row">
			<div class="description" id="opg">
				<h3>[nav_about]</h3>
				<p>[learnmore]</p>
			<div class="contentrow">
				<div class="devsimg">
					<img src="/style/images/dev-s.png" />
				</div>
				<div class="devinfo">
					<div class="devstitle">
						<h3>[developers]</h3>
					</div>

					<div class="devstext">
						<p>[devtext]</p>
					</div>
				</div>

	<div class="clearfix"></div>
				<div class="desinfo">
					<div class="devstitle">
						<h3>[designers]</h3>
					</div>
					<div class="devstext">
						<p>[destext]</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php require 'inc.footer.php'; ?>