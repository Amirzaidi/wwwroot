<?php $page = 'main'; require 'inc.top.php'; ?>
	<div id="content">
		<div>
			<div>
				<img src="http://www.seriouszone.com/gallery/var/serious-sam-3-bfe/SS3_1_5760x1080.jpg?m=1395959576" />
			</div>
		</div>

		<div id="columns">
			<style type="text/css">
			a#add + div { display: none !important }
			a#add:target + div { display: inline-block !important }
			</style>
			<a id="add" class="jump"></a>
			<div>
				<form action="index.php" method="post">
					<div><input type="text" name="url" placeholder="Url" /></div>
					<div><textarea placeholder="Description" name="text"></textarea></div>
					<div><select><option>Keep direct link</option><option>Rehost on our servers</option></select></div>
					<div><button type="submit" class="color action hd2">Submit</button><button type="reset" class="action">Cancel</button></div>
					<div class="clearfix"></div>
				</form>
				<div class="clearfix"></div>
			</div>

			<?php for ($i = 0; $i < $imgcount; $i++) { ?>
			<input type="checkbox" id="c<?php echo $i; ?>" class="hide" />
			<div id="e<?php echo $i; ?>">
				<a id="j<?php echo $i; ?>" class="jump"></a>
				<?php if ($i % 5 < 3) { ?>
				<a class="round" style="background-image: url('https://i.ytimg.com/vi/kMQZsEjEd84/maxresdefault.jpg')" href="#"></a>
				<div class="text"><b>Amir Zaidi</b><br/>Posted <?php echo ($i + 2); ?> days ago</div>
				<?php } else { ?>
				<div class="text"><b>Archive</b></div>
				<?php } ?>

				<img src="<?php echo $img[$i]; ?>" />
				<label for="c<?php echo $i; ?>"><p>VIEW MORE</p></label>
				<div class="collapse">
					<p class="line24">
						Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
					</p>
					<a href="<?php echo $img[$i]; ?>" target=_blank class="action">DOWNLOAD</a>
					<a href="#" class="action">SHARE</a>
					<a class="action disabled">SAVE</a>
					<label for="c<?php echo $i; ?>"><a class="action">HIDE</a></label>
				</div>
			</div>
			<?php } ?>

			<div>
				<a id="login" class="jump"></a>
				<form action="index.php" method="post">
					<div><input type="text" name="name" placeholder="Username" /></div>
					<div><input type="password" name="pass" placeholder="Password" /></div>
					<div><button type="submit" class="hd2 color action">Submit</button><button type="reset" class="action">Cancel</button></div>
					<div class="clearfix"></div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>

		<div>
			<div>
				<p>All images from Imgur - Made by Amir Zaidi</p>
			</div>
		</div>
	</div>
	<div id="toast"><a href="main.php" class="action">UNDO</a>Removed azaidi@live.nl</div>
	<a id="button" href="#add" class="color d1" tabindex="0"><b>&#65291;</b></a>
</body>
</html>