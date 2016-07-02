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
	'http://i.imgur.com/pomL8BQ.jpg'
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
	<div id="navbar" class="d2 orange">
		<a href="#open" id="open"><div>=</div></label>
		<a href="#" id="close"><div></div></a>

		<div id="nav">
			<a style="color: white" href="#"><div class="orange" style="padding-top: 112px;">New Theme</div></a>
			<a href="/dev/themes/new/index.php#navbar"><div>Open Navbar</div></a>
			<a id="current"><div>Your Feed</div></a>
			<a href="/dev/themes/new/new.php"><div>What's New</div></a>
			<a href="/dev/themes/new/trending.php"><div>Currently Trending</div></a>
		</div>
	</div>

	<div id="content">
		<!--<div id="header">
			<div><p>This is a topkek top header</p></div>
		</div>-->

		<div id="columns">
			<?php for ($i = 0; $i < $imgcount; $i++) { ?>
			<input type="checkbox" id="e<?php echo $i; ?>" class="hide" />
			<div id="e<?php echo $i; ?>">
				<div class="photo"><img src="<?php echo $img[$i]; ?>" /></div>
				<div class="text"><b>Wallpaper Image</b><br/><?php echo $img[$i]; ?></div>
				<img src="<?php echo $img[$i]; ?>" />
				<div class="collapse">
					<p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
					<p style="background: #eee;"><a href="#">Download</a><br/><a href="#">Share</a></p>
				</div>
				<label for="e<?php echo $i; ?>"><p>VIEW MORE <b style="float: right">&#x25BE;</b></p></label>
			</div>
			<?php } ?>
		</div>

		<div id="footer">
			<div><p>&copy; All images from Imgur (To do)</p></div>
		</div>
	</div>

	<style type="text/css">
	<?php
	for ($i = 0; $i < $imgcount; $i++)
	echo 'input#e', $i, ':checked ~ div#e', $i, ' > div.collapse { max-height: 300px }
	input#e', $i, ':checked ~ div#e', $i, ' > label { max-height: 0 }
	';
	?>
	</style>

	<input type="checkbox" id="toastbox" class="hide" />
	<div id="toast">
		<div class="d3 hd5"><label for="toastbox" id="toastboxlabel">&#215;</label> You were logged in as Kyou-kun</div>
	</div>
</body>
</html>
