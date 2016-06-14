<?php
$language->load('index');
?>

<?php require 'inc.nav.php'; ?>

<header>

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

<a id="leaderboard">

<div class="whiterow">

	<div class="headconbody">

		<div class="row">
			
			<div class="description">

				<h3>Leaderboard</h3>
				<p>Here you will be informed about the amount of medals each countries has won!</p>

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
								<p><?php echo $country->medal()->count(); ?> medals in total</p>

								<p id="topmdld">Of Which</p>

							<div class="medaldetails">
								<p><?php
								$medalCounts = $country->medal()->typeCounts();
								if ($medalCounts[0] > 0)
								{
									echo '<img src="/style/images/medal_gold.png" />', $medalCounts[0];
								}
								if ($medalCounts[1] > 0)
								{
									echo '<img src="/style/images/medal_silver.png" />', $medalCounts[1];
								}
								if ($medalCounts[2] > 0)
								{
									echo '<img src="/style/images/medal_bronze.png" />', $medalCounts[2];
								}
								?></p>
							</div>

							</div>
						</div>
					
					</div>

					<?php
					}
					?>

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
<?php require 'inc.footer.php'; ?>