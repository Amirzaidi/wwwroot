<?php
$lang->load('index');
?>

<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>

	<script type="text/javascript">

	  $(window).load(function() {          
	  var i =1;
	  var images = ['/style/images/bg0.jpg','/style/images/bg1.jpg'];
	  var image = $('header');

	                //Initial Background image setup
	  image.css('background-image', 'url(/style/images/bg0.jpg)');
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

	<script>

		function toggleDisplay() {
			var tD = document.getElementById("pexp");
			tD.style.display = (tD.style.display == "block") ? "none" : "block";			

		}


	</script>

<?php require 'inc.nav.php'; ?>

<header>

	<div class="stylelayer">

		<div class="headcon" id="headerfixedcon">

		<div class="webstar">

			<h2> <a href="https://www.countriesstandoff.com">[indexmsg]</a> </br></h2>

		</div>

		<div class="webstarinfo">

		<p style="color: red;">China vs India. Two very big countries. They attract people, entrepreneurs, businesses, and all other related stuff. But, no one has voted about the ultimate form of a BRIC country. Here, we vote on the two biggest BRIC countries. These two countries will go head to head in a voting! Who will win? </br><strong>VOTE BELOW!</strong> (Voting ends at 02-02-2016)</p> </br>
		<p style="font-weight: bold; font-variant: small-caps;"> Must also see: </p>
		<a href="adverts/ads.html">Advertise Here! [TEXT ADS] MYLIKES SOURCES</a>

		</div>

		</div>

	</div>

</header>

<div class="bodycontent">

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="#">Advertise Here!</a></p>

			</div>

		</div>

	</div>

</div>

<a id="leaderboard"><div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<h3>Leaderboard</h3>
				<p>Here you will see the results of every voting contest! They will be put in archive at the end of the year</p>

				<div class="contentrow">

					<div class="col-md-4">

						<div class="contestinfo">

							<h1>India <img src="/style/images/vs.png"/> U.S. America</h1>
								<div class="datecontest">
									<p>20-12-2015 to 4-1-2016</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/>India</p>
								</div>

						</div>

						<div class="contestinfo">

							<h1>China <img src="/style/images/vs.png"/> India</h1>
								<div class="datecontest">
									<p id="timer">13d 23:59:34 till end</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/></p>
								</div>

						</div>

					</div>

					<div class="col-md-4">
						
						<div class="contestinfo">

							<h1>India <img src="/style/images/vs.png"/> U.S. America</h1>
								<div class="datecontest">
									<p>20-12-2015 to 4-1-2016</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/>India</p>
								</div>

						</div>

						<div class="contestinfo">

							<h1>China <img src="/style/images/vs.png"/> India</h1>
								<div class="datecontest">
									<p id="timer">13d 23:59:34 till end</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/></p>
								</div>

						</div>

					</div>

					<div class="col-md-4">

						<div class="contestinfo">

							<h1>India <img src="/style/images/vs.png"/> U.S. America</h1>
								<div class="datecontest">
									<p>20-12-2015 to 4-1-2016</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/>India</p>
								</div>

						</div>

						<div class="contestinfo">

							<h1>China <img src="/style/images/vs.png"/> India</h1>
								<div class="datecontest">
									<p id="timer">13d 23:59:34 till end</p>
								</div>

								<div class="votingwin">
									<p><img src="/style/images/winvoting.png"/></p>
								</div>

						</div>

					</div>

					<div class="col-md-12">

						<h3> Caption </h3>

						<div class="contentrow">

							<div class="col-md-24">
								<h1>Versus</h1><img src="/style/images/vs.png"></img><p>The Standoff</p>
							</div>

							<div class="col-md-24">
								<h1>Medal</h1><img src="/style/images/winvoting.png"></img><p>Won a voting contest</p>
							</div>

							<div class="col-md-24">
								<h1>Trophy </br> Rookie </h1><img src="/style/images/trophy.png"></img><p>Won a year of voting</p>
							</div>

							<div class="col-md-24">
								<h1>Honour </br> Veteran </h1><img src="/style/images/honour.png"></img><p>Won two years of voting</p>
							</div>

							<div class="col-md-24">
								<h1>Crown </br> Emperor of cso.com</h1><img src="/style/images/win4years.png"></img><p>Won four years of voting</p>
							</div>

						</div>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here!</a></p>

			</div>

		</div>

	</div>

</div>

<div class="specialrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description" id="specialdesc">

				<h5>Explanation</h5>
				<p id="explp">We will explain you what this site is and what we do on this site</p>

				<div class="contentrow">
			
					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qwhatisthis] <img id="dpexp" onclick="toggleDisplay()" src="/style/images/dpimg.png"></img></h1>

							<p id="pexp"> [exp_whatisthis] </p>

						</div>

					</div>	

					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qhowdoesthiswork] <img id="dpexp" src="/style/images/dpimg.png"></img></h1>

							<p> [exp_howdoesthiswork]  </p>

						</div>

					</div>	

					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qwhatisthegoalofthis] <img id="dpexp" src="/style/images/dpimg.png"></img></h1>

							<p> [exp_whatisthegoalofthis] </p>

						</div>

					</div>	

					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qhowdoestheleaderboardwork] <img id="dpexp" src="/style/images/dpimg.png"></img></h1>

							<p> [exp_howdoestheleaderboardwork] </p>

						</div>

					</div>	

					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qhowdoesvotingwork] <img id="dpexp" src="/style/images/dpimg.png"></img></h1>

							<p> [exp_howdoesvotingwork] </p>

						</div>

					</div>	

					<div class="col-md-18">
					
						<div class="exptxt">
							
							<h1> [qwhatnow] <img id="dpexp" src="/style/images/dpimg.png"></img></h1>

							<p> [exp_whatnow] </p>

						</div>

					</div>				


				</div>

			</div>

		</div>

	</div>

</div>

<a id="vote"></a><div class="greyrow" id="advertwhite">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here!</a></p>

			</div>

		</div>

	</div>

</div>

<div class="albumrow">

<div class="stylelayer" id="stylelayervote">

	<div class="headconbody">

		<div class="row">

			<div class="description">

				<h6> VOTE TO WIN! </h6>
				<p id="albump"> Here it is! This is the ultimate stand off between these two BRIC countries! Vote now!</p></br>

					<form action="index.php" method="post" style="padding: 40px; background-color: rgba(0, 0, 0, 0.4);">

					<p id="formp">Choose one of the two countries and click on vote!</p></br>

					<div class="ch" id="vl"><input type="radio" name="formChina"> China</div>
					<div class="in" id="vl"><input type="radio" name="formIndia"> India</div></br></br>

					<input type="submit" name="submitbut" value="Vote!">

					</form>

			</div>

		</div>
	
	</div>

</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here!</a></p>

			</div>

		</div>

	</div>

</div>

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

			<h3> Why vote for [insert c]? </h3>
			<p> We have listed some facts about why you should vote for [insert c]! </p>

			</div>

			<div class="contentrow">

				<div class="ex1" id="exfixed">

					<img src="/style/images/ex1.jpg"/>

					<div class="imgtitle">

						<h4> Civilization </h4>

					</div>
				
					<div class="imgtext">

						<p>China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex2" id="exfixed">

					<img src="/style/images/ex2.jpg"/>

					<div class="imgtitle">

						<h4> Inventions </h4>

					</div>

					<div class="imgtext">

						<p>The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

	<div class="clearfix"></div>

				<div class="ex3" id="exfixed">

					<img src="/style/images/ex3.png"/>

					<div class="imgtitle">

						<h4> B.C. Tech </h4>

					</div>

					<div class="imgtext">

						<p>By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex4" id="exfixed">

					<img src="/style/images/ex4.jpg"/>

					<div class="imgtitle">

						<h4> Weaponry </h4>

					</div>

					<div class="imgtext">

						<p>The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

			<h3> Why vote for [insert c]? </h3>
			<p> We have listed some facts about why you should vote for [insert c]! </p>

			</div>

			<div class="contentrow">

				<div class="ex1" id="exfixed">

					<img src="/style/images/ex1.jpg"/>

					<div class="imgtitle">

						<h4> Civilization </h4>

					</div>
				
					<div class="imgtext">

						<p>China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex2" id="exfixed">

					<img src="/style/images/ex2.jpg"/>

					<div class="imgtitle">

						<h4> Inventions </h4>

					</div>

					<div class="imgtext">

						<p>The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

	<div class="clearfix"></div>

				<div class="ex3" id="exfixed">

					<img src="/style/images/ex3.png"/>

					<div class="imgtitle">

						<h4> B.C. Tech </h4>

					</div>

					<div class="imgtext">

						<p>By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex4" id="exfixed">

					<img src="/style/images/ex4.jpg"/>

					<div class="imgtitle">

						<h4> Weaponry </h4>

					</div>

					<div class="imgtext">

						<p>The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

			<h3> Why vote for [insert c]? </h3>
			<p> We have listed some facts about why you should vote for [insert c]! </p>

			</div>

			<div class="contentrow">

				<div class="ex1" id="exfixed">

					<img src="/style/images/ex1.jpg"/>

					<div class="imgtitle">

						<h4> Civilization </h4>

					</div>
				
					<div class="imgtext">

						<p>China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex2" id="exfixed">

					<img src="/style/images/ex2.jpg"/>

					<div class="imgtitle">

						<h4> Inventions </h4>

					</div>

					<div class="imgtext">

						<p>The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

	<div class="clearfix"></div>

				<div class="ex3" id="exfixed">

					<img src="/style/images/ex3.png"/>

					<div class="imgtitle">

						<h4> B.C. Tech </h4>

					</div>

					<div class="imgtext">

						<p>By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex4" id="exfixed">

					<img src="/style/images/ex4.jpg"/>

					<div class="imgtitle">

						<h4> Weaponry </h4>

					</div>

					<div class="imgtext">

						<p>The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

			<h3> Why vote for [insert c]? </h3>
			<p> We have listed some facts about why you should vote for [insert c]! </p>

			</div>

			<div class="contentrow">

				<div class="ex1" id="exfixed">

					<img src="/style/images/ex1.jpg"/>

					<div class="imgtitle">

						<h4> Civilization </h4>

					</div>
				
					<div class="imgtext">

						<p>China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex2" id="exfixed">

					<img src="/style/images/ex2.jpg"/>

					<div class="imgtitle">

						<h4> Inventions </h4>

					</div>

					<div class="imgtext">

						<p>The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

	<div class="clearfix"></div>

				<div class="ex3" id="exfixed">

					<img src="/style/images/ex3.png"/>

					<div class="imgtitle">

						<h4> B.C. Tech </h4>

					</div>

					<div class="imgtext">

						<p>By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex4" id="exfixed">

					<img src="/style/images/ex4.jpg"/>

					<div class="imgtitle">

						<h4> Weaponry </h4>

					</div>

					<div class="imgtext">

						<p>The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

			<h3> Why vote for [insert c]? </h3>
			<p> We have listed some facts about why you should vote for [insert c]! </p>

			</div>

			<div class="contentrow">

				<div class="ex1" id="exfixed">

					<img src="/style/images/ex1.jpg"/>

					<div class="imgtitle">

						<h4> Civilization </h4>

					</div>
				
					<div class="imgtext">

						<p>China is often considered the longest continuous civilization, with some historians marking 6000 B.C. as the dawn of Chinese civilization. It also has the world’s longest continuously used written language</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex2" id="exfixed">

					<img src="/style/images/ex2.jpg"/>

					<div class="imgtitle">

						<h4> Inventions </h4>

					</div>

					<div class="imgtext">

						<p>The Chinese invented paper, the compass, gunpowder, and printing. Toilet paper was also invented in China in the late 1300s. It was for emperors only.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

	<div class="clearfix"></div>

				<div class="ex3" id="exfixed">

					<img src="/style/images/ex3.png"/>

					<div class="imgtitle">

						<h4> B.C. Tech </h4>

					</div>

					<div class="imgtext">

						<p>By the fourth century B.C., the Chinese were drilling for natural gas and using it as a heat source, preceding Western natural gas drilling by about 2,300 years.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

				<div class="ex4" id="exfixed">

					<img src="/style/images/ex4.jpg"/>

					<div class="imgtitle">

						<h4> Weaponry </h4>

					</div>

					<div class="imgtext">

						<p>The crossbow was invented and first used by the Chinese. They were also the first in the world to use chemical and gas weapons, 2,000 years before gas was used in Europe during WWI.</p>

					</div>

					<div class="imglink">

						<a href="#">Learn More (PPC)</a>

					</div>

				</div>

			</div>

		</div>

	</div>

</div>

<div class="greyrow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<p><a href="adverts/ads.html">Advertise Here!</a></p>

			</div>

		</div>

	</div>

</div>
<?php require 'inc.footer.php'; ?>