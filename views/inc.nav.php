<nav id="wnav">
	<div class="title">
		<a href="index.php">cso.com</a>
	</div>
	<div class="navcon" id="wnavcon">
		<ul>
			<?php if ($page == 'index') { ?>
			<li><a href="/#">[nav_home]</a></li><!--
			--><li><a href="#vote">[nav_vote]</a></li><!--
			--><!--<li><a href="#leaderboard">[nav_leaderboard]</a></li>--><!--
			<?php } else { ?>
			<li><a href="/index">[nav_home]</a></li><!--
			<?php } ?>

			--><li><a href="/ads">[nav_adv]</a></li><!--
			--><li><a href="/about">[nav_about]</a></li><!--
			--><li id="tcbut"><a href="/themechange" id="tcbuta">[nav_themechange]</a></li><!--
			--><li><a href="/contact">[nav_contact]</a></li><!--
			<?php if ($session->language != 'en') { ?>
			--><li><a href="/language/en">Engels</a></li><!--
			<?php } if ($session->language != 'nl') { ?>
			--><li><a href="/language/nl">Dutch</a></li><!--
			<?php } ?>
			-->
		</ul>
	</div>
</nav>

<input type="checkbox" id="sidebartoggler"/>

<nav id="mnav">
	<div class="navcon" id="mnavcon">
		<div class="navbar">
			<label for="sidebartoggler" class="toggle"><img src="/style/images/mnavimg.png"></img></label>

			<div class="sidebarmenu">
				<ul>
					<a href=""><li style="border-top: 0;">Home</li></a>
					<a href=""><li>Suchi</li></a>
					<a href=""><li>Anime</li></a>
					<a href=""><li>Come at me</li></a>
					<a href=""><li style="border-bottom: 0;">Banter</li></a>
				</ul>
			</div>
		</div>

		<div class="title" id="mtitle">
			<a href="index.php">cso.com</a>
		</div>
	</div>
</nav>





