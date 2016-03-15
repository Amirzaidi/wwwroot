<?php
$color = 'white';
if (isset($_GET['color']))
{
	$color = $_GET['color'];
}
?>
<!DOCTYPE html>
<head>
	<title>Material <?php echo ucfirst($color); ?></title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo $color; ?>.css" />
	<meta name="viewport" content="width=device-width, initial-scale=0.85">
</head>
<body>
	<div id="nav" class="main">
		<a href="#"><div></div></a>
		<a href="#nav"><div></div></a>
		<div class="medium">
			<a href="?color=white">
				<div>
					<div>White</div>
					<div>Changes the color to white</div>
				</div>
			</a>
			<a href="?color=blue">
				<div>
					<div>Blue</div>
					<div>Changes the color to blue</div>
				</div>
			</a>
			<a href="?color=purple">
				<div>
					<div>Purple</div>
					<div>Changes the color to purple</div>
				</div>
			</a>
			<a href="?color=red">
				<div>
					<div>Red</div>
					<div>Changes the color to red</div>
				</div>
			</a>
			<a href="#1">
				<div>
					<div>Header</div>
					<div>This is the first</div>
				</div>
			</a>
			<a href="#2">
				<div>
					<div>Second</div>
					<div>Idk</div>
				</div>
			</a>
			<a href="#3">
				<div>
					<div>HL3</div>
					<div>Confirmed</div>
				</div>
			</a>
			<a href="#4">
				<div>
					<div>2^2</div>
					<div>Mathematics Shit</div>
				</div>
			</a>
			<a href="#5">
				<div>
					<div>Five</div>
					<div>Five.</div>
				</div>
			</a>
			<a href="#6">
				<div>
					<div>6</div>
					<div>6</div>
				</div>
			</a>
			<a href="#7">
				<div>
					<div>7</div>
					<div>7</div>
				</div>
			</a>
			<a href="#8">
				<div>
					<div>8</div>
					<div>8</div>
				</div>
			</a>
			<a href="#9">
				<div>
					<div>9</div>
					<div>9</div>
				</div>
			</a>
			<a href="#10">
				<div>
					<div>10</div>
					<div>10</div>
				</div>
			</a>
			<a href="#11">
				<div>
					<div>11</div>
					<div>11</div>
				</div>
			</a>
			<a href="#12">
				<div>
					<div>Footer</div>
					<div>Creators</div>
				</div>
			</a>
		</div>
	</div>

	<div id="container" class="main">
		<div class="top dark" id="1">
			<center><h1>Test Layout</h1></center>
		</div>
		<div class="bottom" style="height: 160px; padding: 0; background: url('http://thumbs.dreamstime.com/t/seamless-background-forest-green-summer-birch-trees-bushes-38722994.jpg') repeat-x">

		</div>
		<div class="top" id="2" style="height: 150px">
			Text
		</div>
		<div class="bottom" id="3" style="height: 200px">
			Text
		</div>
		<div class="top" id="4" style="height: 150px">
			Text
		</div>
		<div class="bottom" id="5" style="height: 50px">
			Text
		</div>
		<div class="top" id="6" style="height: 150px">
			Text
		</div>
		<div class="bottom" id="7" style="height: 150px">
			Text
		</div>
		<div class="top" id="8" style="height: 200px">
			Text
		</div>
		<div class="bottom" id="9" style="height: 150px">
			Text
		</div>
		<div class="top" id="10" style="height: 150px">
			Text
		</div>
		<div class="bottom" id="11" style="height: 150px">
			Text
		</div>
		<div class="top" id="12">
			<center>Made by Amir Zaidi<br/>Web Design Template</center>
		</div>
	</div>
</body>
</html>