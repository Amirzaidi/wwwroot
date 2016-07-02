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
			<a style="color: white" href="#"><div class="orange" style="padding-top: 152px;">New Theme</div></a>
			<a href="/dev/themes/new/index.php#navbar"><div>Open Navbar</div></a>
			<a id="current"><div>Selected Page</div></a>
			<?php for ($i = 0; $i < 5; $i++) { ?>
			<a href="/dev/themes/new/index.php"><div>Navigation Page</div></a>
			<?php } ?>
		</div>
	</div>

	<div id="content">
		<div id="header">
			<div><p>This is a topkek top header</p></div>
		</div>

		<div id="columns">
			<input type="checkbox" id="e1" class="hide" />
			<div id="e1">
				<div class="photo"><img src="http://i.imgur.com/9iWpm5z.jpg" /></div>
				<div class="text"><b>Info</b><br/>Subinfo</div>
				<img src="http://i.imgur.com/9iWpm5z.jpg" />
				<p><?php for ($j = 2; $j < 5; $j++) echo 'AYY<br/>'; ?></p>
				<div class="collapse">
					<p><a href="#">Download</a><br/><a href="#">Share</a></p>
				</div>
				<label for="e1"><p>VIEW MORE <b style="float: right">&#x25BE;</b></p></label>
			</div>

			<?php for ($i = 2; $i <= 10; $i++) { ?>
			<input type="checkbox" id="e<?php echo $i; ?>" class="hide" />
			<div id="e<?php echo $i; ?>">
				<p><?php for ($j = 0; $j < $i; $j++) echo 'AYY<br/>'; ?></p>
				<div class="collapse">
					<p><a href="#">Download</a><br/><a href="#">Share</a></p>
				</div>
				<label for="e<?php echo $i; ?>"><p>VIEW MORE <b style="float: right">&#x25BE;</b></p></label>
			</div>
			<?php } ?>
		</div>

		<div id="footer">
			<div><p>Kek</p></div>
		</div>
	</div>

	<style type="text/css">
	<?php
	for ($i = 1; $i <= 10; $i++)
	echo 'input#e', $i, ':checked ~ div#e', $i, ' > div.collapse { max-height: 100px }
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
