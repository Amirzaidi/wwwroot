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
				<p>Insert comp. details here (country, phone number etc.)</p>
				<p>Insert comp. details here (country, phone number etc.)</p>
				<p>Insert comp. details here (country, phone number etc.)</p>
				<p>Insert comp. details here (country, phone number etc.)</p></br>
<?php
if ($found)
{
	echo '(Not possible, already submitted)';
}
?>
				<div class="par parbut">
					<a href="#mailmodal">Send us an email</a>
						<div id="mailmodal" class="modal">
							<a href="#"><div style="width: 100%; height: 100%; z-index: 9; position: fixed;"></div></a>
  							<!--<div class="modal-dialog">-->
    								<div class="modal-content">
      									<div class="container" id="modalheader"> 

        									<a href="#" class="closebtn">x</a>
        									<h2>Send us an email!</h2>

      									</div>

									<div class="container" id="modalquery">
										<input type="text" placeholder="Your Name" id="name"/>
										<input type="text" placeholder="Your Email" id="email"/>
										<input type="text" placeholder="Subject" id="subject"/>
										<textarea name="email" placeholder="Comment" id="contain"></textarea></br>
										<input type="button" value="Send email!" id="sendemail"/>
      									</div>
   								 </div>
 							<!--</div>-->
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>

<?php require 'inc.footer.php'; ?>