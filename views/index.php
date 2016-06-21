<?php
$ip = router::ip();
$ipvote = new vote($ip);

if ($ipvote->found())
{
	$msg = '[previousvote] ' . $ipvote->country->name . ' (' . cron::timeUntil('clearvotes') . ' [timetovote])';
}
else if (isset($uri[0]))
{
	$votecountry = new country(intval($uri[0]));

	if ($votecountry->found() && $votecountry->state == country::voteable()->state)
	{
		new vote([
			'ip' => $ip,
			'country#' => $votecountry->id
		]);

		$votecountry->add('votes', 1);
		$votecountry->update();
		$msg = '[newvote] ' . $votecountry->name;
	}
	else
	{
		$msg = '[invalidvote]';
	}
}
?>
<script src="http://code.jquery.com/jquery-1.10.2.min.js" type="text/javascript"></script>
<?php
$state = null;
$country = country::voteable();
$imgs = [];

while ($country->found())
{
	$state = $country->state;
	$img = '/style/images/bg' . $country->id . '.jpg';
	if (file_exists(root . $img))
	{
		$imgs[] = "'" . $img . "'";
	}
}

if (!isset($imgs[0]))
{
	$imgs[0] = '/style/images/bg0.jpg';
}

$contest = contest::active();

$c = 0;
$color = ['whiterow', 'greyrow'];
?>
	<script type="text/javascript">

	  $(window).load(function() {          
	  var i = 1;
	  var images = [<?php echo implode(',', $imgs); ?>];
	  var image = $('header');

	                //Initial Background image setup
	  //image.css('background-image', "url(<?php echo $imgs[0]; ?>)");
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

<?php require 'inc.nav.php'; ?>

<header style="background-image: url(<?php echo $imgs[0]; ?>)">
	<div class="stylelayer">
		<div class="headcon" id="headerfixedcon">

		<div class="webstar">

			<h2> <a href="#"><?php echo $contest->name; ?> - <?php echo ($state == 'finale') ? '[infinale]' : '[preround]'; ?></a> </br></h2>

		</div>

		<div class="webstarinfo">

		<p><?php echo $contest->desc; ?><br/>[voteby]</p>
		<p style="color: red;">([endat] <?php echo date('d/m H:i:s', time() + cron::timeUntil('pickrandom')); ?> [timezone])</p>
		<p id="result"> <?php if (isset($msg)) echo $msg; ?> </p>
		<a href="/ads">[advertisehere]</a>

		</div>

		</div>
	</div>
</header>

<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<p><a href="/ads">[advertisehere]</a></p>
			</div>
		</div>
	</div>
</div>

<div class="bodycontent" id="vote">
<?php
while ($country->found())
{
?>
<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<h3> <a href="/index/<?php echo $country->id; ?>"><?php echo $country->name; ?></a> (<?php echo $country->votes; ?> [votes]) </h3>
				<p><a href="/reason/<?php echo $country->id; ?>"> [whyvote] </a></p>
			</div>
			<div class="contentrow">
			<?php
			$i = 0;
			$reason = $country->reason();
			while ($reason->found() && $i++ < 4)
			{
			?>
				<div class="ex<?php echo $i; ?>" id="exfixed">
					<img src="/style/images/reason_<?php echo strtolower(str_replace(' ', '', $reason->name)); ?>.jpg"/>
					<div class="imgtitle">
						<h4><?php echo ucwords($reason->name); ?></h4>
					</div>
				
					<div class="imgtext">
						<p><?php echo $reason->desc; ?></p>
					</div>

					<div class="imglink">
						<a href="/ads">[advertisehere]</a>
					</div>
				</div>
			<?php
			}
			?>
			</div>
		</div>
	</div>
</div>
<?php
}
?>

<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<p><a href="/ads">[advertisehere]</a></p>
			</div>
		</div>
	</div>
</div>

<div class="specialrow">
	<div class="headconbody">
		<div class="row">
			<div class="description" id="specialdesc">
				<h5>Explanation</h5>
				<p id="explp">[expl]</p>

				<div class="contentrow">
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qwhatisthis] </h1>
							<div id="dp1"><p id="dpp"> [exp_whatisthis] </p></div>
						</div>
					</div>	
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qhowdoesthiswork] </h1>
							<div id="dp2"><p id="dpp"> [exp_howdoesthiswork] </p></div>
						</div>
					</div>
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qwhatisthegoalofthis] </h1>
							<div id="dp3"><p id="dpp"> [exp_whatisthegoalofthis] </p></div>
						</div>
					</div>	
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qhowdoestheleaderboardwork] </h1>
							<div id="dp4"><p id="dpp"> [exp_howdoestheleaderboardwork] </p></div>
						</div>
					</div>	
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qhowdoesvotingwork] </h1>
							<div id="dp5"><p id="dpp"> [exp_howdoesvotingwork] </p></div>
						</div>
					</div>	
					<div class="col-md-18">
						<div class="exptxt">
							<h1> [qwhatnow] </h1>
							<div id="dp6"><p id="dpp"> [exp_whatnow] </p></div>
						</div>
					</div>				
				</div>
			</div>
		</div>
	</div>
</div>

<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<p><a href="/ads">[advertisehere]</a></p>
			</div>
		</div>
	</div>
</div>

<div class="<?php echo $color[$c++ % 2]; ?>" id="leaderboard">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<h3>[nav_leaderboard]</h3>
				<p>[leaderboarddesc]</p>

				<div class="contentrow">
					<?php
					$country = new country(false);
					while ($country->found())
					{
					?>

					<div class="col-md-4">

						<div class="conx">
							<h1><?php echo $country->name; ?> </h1>

							<div class="medals">
								<p><?php echo $country->medal()->count(); ?> [medalstotal]</p>

						<?php
						if ($country->medal()->count() > 0)
						{
						?>
							<p id="topmdld">[ofwhich]</p>

							<div class="medaldetails">
								<?php
								$medalCounts = $country->medal()->typeCounts();
								if ($medalCounts[0] > 0)
								{
									echo '<img src="/style/images/medal_gold.png" />','<p>', $medalCounts[0], ' [gold] [medal](s)</p>';
								} 
								if ($medalCounts[1] > 0)
								{
									echo '<img src="/style/images/medal_silver.png" />','<p>', $medalCounts[1], ' [silver] [medal](s)</p>';
								} 
								if ($medalCounts[2] > 0)
								{
									echo '<img src="/style/images/medal_bronze.png" />','<p>', $medalCounts[2], ' [bronze] [medal](s)</p>';
								}
								?>
							</div>
						<?php
						}
						?>

							</div>
						</div>
					</div>

					<?php
					}
					?>

					
					<div class="col-md-12">

						<h3> [caption] </h3>

						<div class="contentrow">

							<div class="col-md-24">
								<h1>[gold] </br> [medal]</h1><img src="/style/images/medal_gold.png"></img><p>[1st]</p>
							</div>

							<div class="col-md-24">
								<h1>[silver]</br> [medal] </h1><img src="/style/images/medal_silver.png"></img><p>[2nd]</p>
							</div>

							<div class="col-md-24">
								<h1>[bronze]</br> [medal] </h1><img src="/style/images/medal_bronze.png"></img><p>[3rd]</p>
							</div>

							<div class="col-md-24">
								<h1>[crown]</br> [emperor] cso.uk</h1><img src="/style/images/medal_king.png"></img><p>[year]</p>
							</div>

						</div>

					</div>
					

				</div>

			</div>

		</div>

	</div>

</div>

<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<p><a href="/ads">[advertisehere]</a></p>
			</div>
		</div>
	</div>
</div>
<?php require 'inc.footer.php'; $page = 'Welcome!'; ?>