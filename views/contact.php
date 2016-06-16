<?php
$ip = router::Ip();

$found = new contact($ip);
$found = $found->found();

if (count($_POST) == 3 && !$found)
{
	$_POST['ip'] = $ip;
	new contact($_POST);
}
?>
<?php require 'inc.nav.php'; ?>

<div class="header">
	<div class="imgheadcon">
		<div class="webstar">
			<img src="/style/images/contactus.png"></img>
		</div>
	</div>
</div>

<div class="whiterow">
	<div class="headconbody">
		<div class="row">
			<div class="description" id="opg">
				<h3> Contact us </h3>
				<p>Country - The Netherlands</p>
				<p>Phone - 0031 6 4217 1654</p>
				<p>Alternative Phone - ?</p></br>
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

<?php if (!$found) { ?>

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
								<form action="/contact" method="post">
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