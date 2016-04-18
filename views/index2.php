<?php
$ip = router::ip();
$ipvote = new vote($ip);

if ($ipvote->found())
{
	$msg = '[previousvote] ' . $ipvote->country->name;
}
else if (isset($uri[0]))
{
	$slang = new slang($uri[0]);
	if ($slang->found())
	{
		$votecountry = $slang->country;
	}
	else
	{
		$votecountry = new country(intval($uri[0]));
	}

	if ($votecountry->found() && $votecountry->state == country::voteable()->state)
	{
		new vote([
			'ip' => $ip,
			'country#' => $votecountry->id
		]);

		$votecountry->votes++;
		$votecountry->update();
		$msg = '[newvote] ' . $votecountry->name;
	}
	/*else
	{
		$msg = '[invalidvote]';
	}*/
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
		//$imgs[] = "'" . $img . "'";
	}
}

if (!isset($imgs[0]))
{
	$imgs[0] = '/style/images/bg0.jpg';
}

if (!isset($msg))
{
	$msg = ($state == 'finale') ? '[infinale]' : '[preround]';
}

$c = 0;
$color = ['whiterow', 'greyrow'];
?>
	<script type="text/javascript">

	  $(window).load(function() {          
	  var i = 1;
	  var images = [<?php echo implode(',', $imgs); ?>];
	  var image = $('header');

	                //Initial Background image setup
	  image.css('background-image', "url(<?php echo $imgs[0]; ?>)");
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

<header>
	<div class="stylelayer">
		<div class="headcon" id="headerfixedcon">

		<div class="webstar">

			<h2> <a href="#"><?php echo $msg; ?></a> </br></h2>

		</div>

		<div class="webstarinfo">

		<p style="color: red;">([endat] <?php echo date('d M H:i:s', time() + cron::timeUntil('pickrandom')); ?>)</p> </br>
		<p style="font-weight: bold; font-variant: small-caps;"> --- </p>
		<a href="/ads">[advertisehere]</a>

		</div>

		</div>
	</div>
</header>

<div class="bodycontent">
<?php
while ($country->found())
{
?>
<div class="<?php echo $color[$c++ % 2]; ?>">
	<div class="headconbody">
		<div class="row">
			<div class="description">
				<h3> <a href="/index2/<?php echo $country->id; ?>"><?php echo $country->name; ?></a> (<?php echo $country->votes; ?> [votes]) </h3>
				<p> [whyvote] </p>
			</div>
			<div class="contentrow">
			<?php
			$i = 0;
			$reason = $country->reason();
			while ($reason->found() && $i++ < 4)
			{
			?>
				<div class="ex<?php echo $i; ?>" id="exfixed">
					<img src="/style/images/reason_<?php echo $reason->name; ?>.jpg"/>
					<div class="imgtitle">
						<h4><?php echo ucwords($reason->name); ?></h4>
					</div>
				
					<div class="imgtext">
						<p><?php echo $reason->desc; ?></p>
					</div>

					<div class="imglink">
						<a href="#">---</a>
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
<?php require 'inc.footer.php'; ?>