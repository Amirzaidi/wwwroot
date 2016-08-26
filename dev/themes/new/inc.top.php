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

$colors = [
	'orange' => '#ff5722',
	'blue' => '#2196f3',
	'darkblue' => '#3f51b5',
	'purple' => '#673ab7',
	'red' => '#f44336',
	'green' => '#4caf50',
	'teal' => '#009688',
	'pink' => '#e91e63',
	'black' => '#000'
];

$color = 'orange';
if (isset($_GET['color']) && isset($colors[$_GET['color']]))
{
	$color = $_GET['color'];
}
?>
<!DOCTYPE html>
<head>
	<title>New Theme</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<style type="text/css">
	body button[type="reset"] { color: <?php echo $colors[$color]; ?> !important }
	input[type="text"]:focus, input[type="password"]:focus, textarea:focus, select:focus { border-bottom: 1px solid <?php echo $colors[$color]; ?> }
	body .color { background: <?php echo $colors[$color]; ?> !important }
	body > div#navbar { border: 1px solid <?php echo $colors[$color]; ?> }
	body > div#navbar > div#nav > div > a#current { color: <?php echo $colors[$color]; ?> !important }
	body .action { color: <?php echo $colors[$color]; ?> }
	body a.action:hover { color: <?php echo $colors[$color]; ?> }
	</style>
	<meta name="theme-color" content="<?php echo $colors[$color]; ?>" />
	<?php if (!isset($_GET['desktop'])) { ?><meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no"><?php } ?>
</head>
<body>
	<div id="navbar" class="d2 color">
		<a href="#close" id="close"><div></div></a>
		<a href="#navbar" id="open"><div>&#9776;</div></a>

		<div id="title">What's New</div>
		<label for="search" class="btn"><b>&#9906;</b></label>

		<form action="index.php" method="post">
			<input type="text" name="search" id="search" placeholder="Search.." />
			<label class="btn">&#215;</label>
		</form>

		<div id="nav">
			<input type="checkbox" id="extendnav" class="hide" />
			<label for="extendnav" class="color">
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
				<a href="main.php" <?php if ($page == 'main') echo 'id="current"'; ?>><img src="http://i.imgur.com/ga7l1GQ.png" />What's New</a>
				<a href="#"><img src="http://i.imgur.com/e7Vdxc7.png" />Currently Trending</a>
				<a href="#"><img src="http://i.imgur.com/E8uqYXn.png" />Top Posts</a>
				<a href="grid.php" <?php if ($page == 'grid') echo 'id="current"'; ?>><img src="http://i.imgur.com/YrudrDh.png" />My Submissions</a>
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
