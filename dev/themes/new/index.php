<?php
$img = [
	'http://i.imgur.com/9iWpm5z.jpg', 
	'http://i.imgur.com/a3Jyic2.jpg', 
	'http://i.imgur.com/fU0XhVE.jpg',
	'http://i.imgur.com/0HztdXb.jpg',
	'http://i.imgur.com/M7YCfZS.jpg',
	'http://i.imgur.com/wu1YYp4.jpg',
	'http://i.imgur.com/9YZtSZX.jpg',
	'http://i.imgur.com/XYI9Bf8.jpg',
	'http://i.imgur.com/VHm9Qyo.jpg',
	'http://i.imgur.com/llSRL3j.jpg',
	'http://i.imgur.com/pomL8BQ.jpg',
	'http://i.imgur.com/HlmWDMU.jpg',
	'http://i.imgur.com/mpHgYA0.jpg',
	'http://i.imgur.com/mCAjqEz.jpg'
];
$imgcount = count($img);
?>
<!DOCTYPE html>
<head>
	<title>New Theme</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<?php if (!isset($_GET['desktop'])) { ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><?php } ?>
	<meta name="theme-color" content="#ff5722" />
</head>
<body>
	<div id="navbar" class="d2">
		<a href="#close" id="close"><div></div></a>
		<a href="#navbar" id="open"><div>&#9776;</div></a>

		<input type="checkbox" id="search" class="hide" />

		<div id="title">What's New</div>
		<label for="search" class="btn"><b>&#9906;</b></label>

		<form action="index.php" method="post">
			<input type="text" name="search" placeholder="Search" />
			<label for="search" class="btn">&#215;</label>
		</form>

		<div id="nav">
			<input type="checkbox" id="extendnav" class="hide" />
			<label for="extendnav" class="orange">
				<a class="round" style="background-image: url('https://i.ytimg.com/vi/kMQZsEjEd84/maxresdefault.jpg')" href="#"></a>
				<div>Amir Zaidi</div>
				<div>azaidi@live.nl<b>&#9698;</b></div>
			</label>
			<div id="extended">
				<a class="subheader">Accounts</a>
				<a href="#login"><img src="http://i.imgur.com/gkA2Rwk.png" />Add Account</a>
				<a href="#toast"><img src="http://i.imgur.com/p8T81Wo.png" />Logout</a>
			</div>
			<div>
				<a class="subheader">Navigation</a>
				<a href="slide.php"><img src="http://i.imgur.com/LZhSZbL.png" />Portal</a>
				<a href="#" id="current"><img src="http://i.imgur.com/ga7l1GQ.png" />What's New</a>
				<a href="#"><img src="http://i.imgur.com/e7Vdxc7.png" />Currently Trending</a>
				<a href="#"><img src="http://i.imgur.com/E8uqYXn.png" />Top Posts</a>
				<a href="#"><img src="http://i.imgur.com/YrudrDh.png" />My Submissions</a>
			</div>
			<div>
				<a class="subheader">More</a>
				<a href="#"><img src="http://i.imgur.com/8HHoXLq.png" />Settings</a>
				<?php if (!isset($_GET['desktop'])) { ?><a href="?desktop=true"><img src="http://i.imgur.com/ZzYQgo8.png" />Desktop Version</a><?php } ?>
				<a href="#"><img src="http://i.imgur.com/RvLuAQB.png" />Donate</a>
				<a href="#"><img src="http://i.imgur.com/HK1kcgv.png" />Info</a>
			</div>
		</div>
	</div>

	<div id="content">
		<div id="header">
			<div>
				<img src="http://www.seriouszone.com/gallery/var/serious-sam-3-bfe/SS3_1_5760x1080.jpg?m=1395959576" />
			</div>
		</div>

		<div id="columns">
			<div>
				<a id="add" class="jump"></a>
				<form action="index.php" method="post">
					<div><input type="text" name="url" placeholder="Url" /></div>
					<div><textarea placeholder="Description" name="text"></textarea></div>
					<div><select><option>Keep direct link</option><option>Rehost on our servers</option></select></div>
					<div><button type="submit" class="orange button hd3">Submit</button><button type="reset" class="button hd3">Cancel</button></div>
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
					<p>
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
					<div><button type="submit" class="orange button hd3">Submit</button><button type="reset" class="button hd3">Cancel</button></div>
					<div class="clearfix"></div>
				</form>
				<div class="clearfix"></div>
			</div>
		</div>

		<div id="footer">
			<div><p>All images from Imgur - Made by Amir Zaidi</p></div>
		</div>
	</div>

	<div id="toast"><a href="index.php" class="hd5">UNDO</a>Removed azaidi@live.nl</div>
	<a id="button" href="#add" class="orange d3 hd5"><b>+</b></a>
</body>
</html>