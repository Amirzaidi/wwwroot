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
				<h3> About us </h3>
				<p>Learn more about the makers of cso.com!</p>
			<div class="contentrow">
				<div class="devsimg">
					<img src="/style/images/dev-s.png" />
				</div>
				<div class="devinfo">

					<div class="devstitle">

						<h3> Developers </h3>

					</div>

					<div class="devstext">

						<p>We, the developers of this site, do our utmost best to keep up the site updated and well coded. We check for eventual code bugs or problems with the site. We always learn new ways to code things, that is why we always keep on making the site faster. We would like to her your feedback about the site!</p>

					</div>

				</div>

	<div class="clearfix"></div>
				<div class="desinfo">
					<div class="devstitle">
						<h3> Designers </h3>
					</div>
					<div class="devstext">
						<p>The designers of this website do the styling part. Mostly they design the website or change/add/optimize the CSS. They daily check the sources and see what they can code better so you can enter the site faster. The designers try to find new design styles so they can work on making the site more stylish. Design is very important. Leave us your feedback through mail!</p>
					</div>
				</div>
			</div>
			</div>
		</div>
	</div>
</div>

<?php require 'inc.footer.php'; ?>