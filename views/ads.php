<?php
$ip = router::Ip();

$contact = new contact($ip);
$found = $contact->found();

if (count($_POST) == 4 && !$found)
{
	$_POST['ip'] = $ip;
	new contact($_POST);
	$found = true;
}
?>
<?php require router::$views . 'inc.nav.php'; ?>

<div class="header">
	<div class="imgheadcon">
		<div class="webstar">
			<h2>[advertiseon]</h2>
		</div>
	</div>
</div>

<div class="bodycontent">
<div class="whiterow">
	<div class="headconbody">
		<div class="row">
			<div class="description" id="opg">
				<h3>[advertiser]</h3>
				<div class="par">
					<p>[advertisertext]</p>

				</div>

				<h3>[adskind]</h3>
				<div class="par">
					<p>[adskindtext]</p></br><p>[adskindtext2]</p>
				</div>

				<h3>[adplacement]</h3>
				<div class="par">
					<p>[adplacetext]</p></br><p>[adplacetext2]</p>
				</div>
			</div>
		</div>
	</div>
</div>

<div class="greyrow">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<p><a href="adverts/ads.html">[advertisehere]</a></p>
			</div>
		</div>
	</div>
</div>

<?php if (!$found && false) { ?>

<div class="whiterow">
	<div class="headconbody">
		<div class="row">
			<div class="description" id="opg">
				<h3>[sendmailtext]</h3>

				<div class="par parbut">
					<a href="#mailmodal">[sendmailtitle]</a>
						<div id="mailmodal" class="modal">
							<a href="#"><div class="dark-bg"></div></a>
    							<div class="modal-content">
      								<div class="container" id="modalheader"> 
        								<a href="#" class="closebtn">x</a>
        									<h2>[sendmailtitle]</h2>
      								</div>

								<div class="container" id="modalquery">
								<form action="/ads" method="post">
									<input type="text" placeholder="[your_name]" id="name" name="name" />
									<input type="text" placeholder="[your_mail]" id="email" name="mail"/>
									<input type="text" placeholder="[subject]" id="subject" name="subject"/>
									<textarea placeholder="[comment]" id="contain" name="content"></textarea></br>

									<input type="submit" value="[send]" id="sendemail"/>
								</form>
      								</div>

   							 </div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php } ?>

<?php require 'inc.footer.php'; ?>