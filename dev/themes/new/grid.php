<?php $page = 'grid'; require 'inc.top.php'; ?>
	<div id="content" class="grid">
		<div id="grid">
			<?php for ($j = 0; $j < 3; $j++) { for ($i = 0; $i < $imgcount; $i++) { ?>
			<a class="hd2" href="img.php?id=<?php echo $i; ?>" style="background-image: url('<?php echo $img[$i]; ?>')">
				<p>Caption</p>
			</a>
			<?php } } ?>
		</div>
	</div>
	<div id="toast"><a href="index.php" class="action">UNDO</a>Removed azaidi@live.nl</div>
</body>
</html>