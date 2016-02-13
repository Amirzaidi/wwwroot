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
<meta name="description" content="countriesstandoff.com is a website where people can vote on their/or other countries during a standoff. Every six months the voting resets and new countries will be picked. The country that wins, will be honoured in a special rankinglist that keeps forever!" />

<nav>

	<div class="title">

		<a href="../index.php">cso.com</a>

	</div>

	<div class="navcon">

		<ul>

			<li><a href="/index">Home</a></li><li>
			<a href="/ads">Advertise?</a></li><li>
			<a href="../about/aboutus.php">About us</a></li><li id="tcbut">
			<a href="/themechange" id="tcbuta">Change theme</a></li><li>
			<a href="../contact/contactus.php">Contact us</a></li>

		</ul>

	</div>

</nav>

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

				<h3> Send us an email about it! </h3>

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

				<div class="par">

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

<div class="footerrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<div class="footer">

				<a href="adverts/ads.html">Advertise Here! [TEXT ADS] MYLIKES.COM SOURCES</a>
				</br>
				<a href="#">Privacy Policy |</a><a href="#"> Terms and Conditions |</a><a href="#"> Hoster</a>

				</div>			

			</div>

		</div>

	</div>

</div>

</div>