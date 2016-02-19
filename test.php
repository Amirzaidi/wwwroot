<!DOCTYPE html>
<head>
	<style type="text/css">
@font-face {
	font-family: 'Roboto';
	font-style: normal;
	font-weight: 300;
	src: url(https://fonts.gstatic.com/s/roboto/v15/Hgo13k-tfSpn0qi1SFdUfbO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
}

@font-face {
	font-family: 'Roboto';
	font-style: normal;
	font-weight: 400;
	src: url(https://fonts.gstatic.com/s/roboto/v15/CrYjSnGjrRCn0pd9VQsnFOvvDin1pK8aKteLpeZ5c0A.woff) format('woff');
}

@font-face {
	font-family: 'Roboto';
	font-style: normal;
	font-weight: 500;
	src: url(https://fonts.gstatic.com/s/roboto/v15/RxZJdnzeo3R5zSexge8UUbO3LdcAZYWl9Si6vvxL-qU.woff) format('woff');
}

	* {
		transition: all 0.25s ease-in;
	}

	body {
		margin: 0;
		background: #4DB6AC;
		font: 14px Roboto;
		font-weight: 400;
		text-shadow: 0 1px #fff;
	}

	body > div.nav {
		background: #fff;
		position: fixed;
		left: 0;
		top: 0;
		bottom: 0;
		overflow: auto;
		height: 100%;
		width: 7%;
	}

	body > div.container {
		position: fixed;
		height: 100%;
		width: 93%;
		overflow: auto;
		left: 7%;
		right: 0;
		top: 0;
		bottom: 0;
		margin: auto;
		box-shadow: 0 0 15px 0 #777;
	}

	body > div.container > div {
		position: relative;
		cursor: pointer;
		padding: 15px 20px;
	}

	body > div.container > div.top {
		background: #fff;
		z-index: 2;
	}

	body > div.container > div.top:hover {
		box-shadow: 0 0 30px 0 #777;
	}

	body > div.container > div.bottom {
		background: #eee;
		z-index: 1;
		box-shadow: 0 7px 7px -7px #000 inset, 0 -7px 7px -7px #000 inset;
	}

	body > div.container > div.bottom:hover {
		background: #eee;
		box-shadow: none;
	}

	@media screen and (min-width: 1080px) and (min-height: 700px) {
		body > div.container {
			left: 0;
			height: 700px;
			width: 900px;
		}

		body > div.container:hover {
			box-shadow: 0 0 30px 0 #777;
		}
	}

	::-webkit-scrollbar
	{
		width: 10px;
	}

	::-webkit-scrollbar-track
	{
		background: #fff;
	}

	::-webkit-scrollbar-thumb
	{
		background: #ccc;
	}
	</style>
</head>
<body>
	<div class="nav">
		nav
	</div>
	<div class="container">
		<?php
		$amount = rand(5, 20);
		for ($i = 0; $i < $amount; $i++)
		{
			echo '<div class="top" style="height: ', (rand(2, 5) * 50), 'px">Dodo</div>';
			echo '<div class="bottom" style="height: ', (rand(2, 5) * 50), 'px">Text</div>';
		}
		?>
	</div>
</body>
</html>