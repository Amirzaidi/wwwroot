<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="/style/main.css">
<title>countriesstandoff.com | The site where countries win democratically!</title>
<meta name="description" content="countriesstandoff.com is a website where people can vote on their/or other countries during a standoff. Every six months the voting resets and new countries will be picked. The country that wins, will be honoured in a special rankinglist that keeps forever!" />

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

	<script type="text/javascript">

	  $(window).load(function() {          
	  var i =1;
	  var images = ['/images/bg0.jpg','/images/bg1.jpg'];
	  var image = $('header');

	                //Initial Background image setup
	  image.css('background-image', 'url(/images/bg0.jpg)');
	                //Change image at regular intervals

	  setInterval(function(){  
	   image.fadeOut(600, function () {
	   image.css('background-image', 'url(' + images [i++] +')');
	   image.fadeIn(600);
	   });
	   if(i == images.length)
	    i = 0;
	  }, 5000);           
	 });

	</script>

	<script type="text/javascript">



	</script>

</head>

<body>

<nav>

	<div class="title">

		<a href="../index.php">cso.com</a>

	</div>

	<div class="navcon">

		<ul>

			<li><a href="/index">Home</a></li><li>
			<a href="/ads">Advertise?</a></li><li>
			<a href="../about/aboutus.php">About us</a></li><li>
			<a href="../contact/contactus.php">Contact us</a></li>

		</ul>

	</div>

</nav>

<div class="header">

	<div class="imgheadcon">

		<div class="webstar">

			<h2> Advertise on cso.com </h2>

		</div>

	</div>

</div>

<div class="bodycontent">

<div class="greyrow">

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

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here! (example)</a></p>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description" id="opg">

				<h3> Send us an email about it! </h3>

				<div class="par">

					<p>If you are interested in doing business, please send us a mail! Fill in the fields below!</p></br>

					<form action="ads.php" method="post">

					<p> Your email: </p><input type="text"></br>

					<p> Subject: </p><input type="text"></br>

					<p> Containment of email: </p><input type="text" style="width: 60%; height: 30%;"></br>

					<p> Appendix (optional): </p><input type="text"></br>

					</form>

				</div>

			</div>

		</div>

	</div>

</div>

</div>

</body>

</html>