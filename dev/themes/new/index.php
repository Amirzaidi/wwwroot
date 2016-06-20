<!DOCTYPE html>
<head>
	<title>Accuracy</title>
	<link rel="stylesheet" type="text/css" href="main.css" />
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>
	<div id="navbar" class="d2">
		<input type="checkbox" id="navbox" class="hide" />
		<label for="navbox" id="navboxlabel"><div>=</div></label>

		<div id="nav" class="d3 hd5">
			<?php for ($i = 6; $i < 16; $i++) { ?>
			<a href="/dev/themes/new/index.php"><div class="hd1">Kek</div></a>
			<?php } ?>
		</div>
	</div>

	<div id="content">
		<div id="header">
		</div>

		<div>
		<?php for ($i = 6; $i < 16; $i++) { ?>
		<div class="d1 hd2"><?php for ($j = 2; $j < $i; $j++) echo 'AYY<br/>'; ?>
		</div>
		<?php } ?>
		</div>

		<div>
		<?php for ($i = 5; $i < 14; $i++) { ?>
		<div class="d1 hd2"><?php for ($j = 0; $j < $i; $j++) echo 'LMAO<br/>'; ?>
		</div>
		<?php } ?>
		</div>

		<div id="footer">
			<div class="d1 hd2">Kek</div>
		</div>
	</div>

	<input type="checkbox" id="toastbox" class="hide" />
	<div id="toast">
		<div class="d2 hd4"><label for="toastbox" id="toastboxlabel">&#215;</label> You were logged in as Kyou-kun</div>
	</div>
</body>
</html>
