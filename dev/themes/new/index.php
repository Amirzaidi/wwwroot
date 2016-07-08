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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta name="theme-color" content="#ff5722" />
</head>
<body>
	<div id="navbar" class="d2">
		<input type="checkbox" id="navbox" class="hide" />
		<a href="#close" id="close"><div></div></a>
		<a href="#navbar" id="open"><div>&#9776;</div></label>

		<div id="nav">
			<a id="first"><div class="orange">New Theme</div></a>
			<a href="slide.php"><div>Portal</div></a>
			<a id="current"><div>What's New</div></a>
			<a href="/dev/themes/new/trending.php"><div>Currently Trending</div></a>
			<a href="#login"><div>Login</div></a>
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
				<a id="login" class="jump"></a>
				<form action="index.php" method="post">
					<div><input type="text" name="name" placeholder="Username" /></div>
					<div><input type="password" name="pass" placeholder="Password" /></div>
					<div><button type="submit" class="orange button hd3">Submit</button><button type="reset" class="button hd3">Cancel</button></div>
					<div class="clearfix"></div>
				</form>
				<div class="clearfix"></div>
			</div>

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
				<div class="photo"><img src="<?php echo $img[$i]; ?>" /></div>
				<div class="text"><b>Wallpaper Image</b><br/><?php echo $img[$i]; ?></div>
				<img src="<?php echo $img[$i]; ?>" />
				<div class="collapse">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur.</p>
					<p style="background: #eee;"><a href="#">Download</a><br/><a href="#">Share</a></p>
					<label for="c<?php echo $i; ?>"><p>HIDE <b style="float: right">&#x25B4;</b></p></label>
				</div>
				<label for="c<?php echo $i; ?>"><p>VIEW MORE <b style="float: right">&#x25BE;</b></p></label>
			</div>
			<?php } ?>
		</div>

		<div id="footer">
			<div><p>All images from Imgur - Made by Amir Zaidi</p></div>
		</div>
	</div>

	<a id="button" href="#add">
		<div class="orange d3 hd5">+</div>
	</a>

	<input type="checkbox" id="toastbox" class="hide" />
	<div id="toast">
		<div class="d3 hd5"><label for="toastbox" id="toastboxlabel">&#215;</label> You have added something</div>
	</div>
</body>
</html>