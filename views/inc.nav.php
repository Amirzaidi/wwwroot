<nav id="wnav">
	<div class="title">
		<a href="/">cso.uk</a>
	</div>
	<div class="navcon" id="wnavcon">
		<ul>
			<?php if ($page == 'index') { ?>
			<li><a href="#">[nav_home]</a></li><!--
			--><li><a href="#vote">[nav_vote]</a></li><!--
			--><li><a href="#leaderboard">[nav_leaderboard]</a></li><!--
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
			<?php if ($page == 'index') { ?>
			<a href="#"><li style="border-top: 0;">[nav_home]</li></a>
			<a href="#vote"><li>[nav_vote]</li></a>
			<a href="#leaderboard"><li>[nav_leaderboard]</li></a>
			<?php } else { ?>
			<a href="/index"><li>[nav_home]</li></a>
			<?php } ?>

			<a href="/ads"><li>[nav_adv]</li></a>
			<a href="/about"><li>[nav_about]</li></a>
			<a href="/themechange" id="tcbuta"><li>[nav_themechange]</li></a>
			<a href="/contact"><li>[nav_contact]</li></a>
			<?php if ($session->language != 'en') { ?>
			<a href="/language/en"><li>Engels</li></a>
			<?php } if ($session->language != 'nl') { ?>
			<a href="/language/nl"><li>Dutch</li></a>
			<?php } ?>
				</ul>
			</div>
		</div>

		<div class="title" id="mtitle">
			<a href="/">cso.uk</a>
		</div>
	</div>
</nav>