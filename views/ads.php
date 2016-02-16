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

<?php require 'inc.nav.php'; ?>

<div class="header">

	<div class="imgheadcon">

		<div class="webstar">

			<h2> Advertise on cso.com </h2>

		</div>

	</div>

</div>

<div class="bodycontent">

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description" id="opg">

				<h3> Are you an advertiser? </h3>

				<div class="par">

					<p> And are you willing to advertise on our website? Then you are on the right page! We are always searching for new advertisers that would like to advertise on our website. We have a wide viewing population throughout the world. 
						This website is basically an internet ''game''. Well actually better described as an international voting system where you can vote for the country you think is better. This site is time consuming since you are always wondering who will win.</p>

				</div>

				<h3> What kind of ads are we searching for? </h3>

				<div class="par">

					<p> We first would like to negotiate about the type of ad you would like to show on cso.com. This way we can sure understand both sides better and make a good deal. We do have a few rules about the containments of the ad.
						We do not accept any NSFW, gore, sexual, or any sort of 18+ ad. We would like to keep our website clean from sexual interference with our viewers. Please do not come over with these sort of ads. We will not accept the offer.</p> </br> <p> On the other hand, 
						we accept ads that are or text or banner form. If you have a video ad and still would like to advertise on cso.com, be sure to contact us about it. There is room for negiotiation about video ads.</p>

				</div>

				<h3> Ads placement on cso.com </h3>

				<div class="par">

					<p> Since we accept different forms of ads, we also offer you places for the ads based on their form. Banner ads will be placed between the grey/white boxes that contain information. See the example below. If you see a row like this with ''Advertise here!'', 
						there is a big chance we are still searching for an advertiser who can put his banner form ad there. (Example below is not available!). </p> </br>

					<p> However, if you only have text-based ads, then you still are on the right address! We also offer places for text ads. You can put your text ad in the header (under ''Must see also:''). Or there is space on the bottom of the page where you can find ''Privacy policy'' etc.
						Please contact us about the form of ad, how many you would like to have on cso.com, pricing, type of ad (PPC, CPM) etc.</p>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here! (example)</a></p>

			</div>

		</div>

	</div>

</div>


<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description" id="opg">

				<h3> Send us an email about it! </h3>
<?php
if ($found)
{
	echo '(Not possible, already submitted)';
}
?>

				<div class="par">

					<a href="#mailmodal">Send us an email</a>

						<div id="mailmodal" class="modal">
							<a href="#"><div class="dark-bg"></div></a>

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
						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<?php require 'inc.footer.php'; ?>