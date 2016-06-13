<?php
$nav = [
	['/manage/continent#add', 'Add', 'Add a new continent'],
	['#continents', 'All', 'Show all continents']
];
require 'inc.manage.php';
?>
<div id="container" class="main">
	<div class="top dark">
		<center><h1>[title]</h1></center>
	</div>
	<div id="add" style="height: 160px; padding: 0; background: url('http://thumbs.dreamstime.com/t/seamless-background-forest-green-summer-birch-trees-bushes-38722994.jpg') repeat-x">
	</div>
	<?php
	if (count($_POST) == 2)
	{
		new continent($_POST);
		echo '<div class="green">Continent ', $_POST['name'], ' has been added</div>';
	}
	?>
	<div>
		<form action="/manage/continent/edit" method="post">
			<?php
			if (isset($uri[0]) && is_numeric($uri[0]))
			{
				$_POST['id'] = $uri[0];
			}

			if (isset($_POST['id']))
			{
				$continent = new continent(intval($_POST['id']));
				if ($continent->found())
				{
					$noAdd = false;
					if (count($_POST) == 3)
					{
						$continent->name = $_POST['name'];
						$continent->desc = $_POST['desc'];
						$continent->update();
					}
					?>
			<input type="hidden" name="id" value="<?php echo $continent->id; ?>" />
			<div><input type="text" name="name" placeholder="Name" value="<?php echo $continent->name; ?>" /></div>
			<div><textarea name="desc" placeholder="Description"><?php echo $continent->desc; ?></textarea></div>
			<div><input type="submit" value="Edit"/></div>
					<?php
				}
			}

			if (!isset($noAdd))
			{
			?>
			<div><input type="text" name="name" placeholder="Name" /></div>
			<div><textarea name="desc" placeholder="Description"></textarea></div>
			<div><input type="submit" value="Add"/></div>
			<?php
			}
			?>
		</form>
	</div>
	<?php
	$continent = new continent(false);
	?>
	<div id="continents">
		<?php echo $continent->count(); ?> continents found
	</div>
	<?php
	while ($continent->found())
	{
	?>
	<div>
		<?php
		echo '[', $continent->country()->count(), ' countries] <a href="/manage/continent/', $continent->id, '">', $continent->name, '</a> - ', $continent->desc;
		?>
	</div>
	<?php
	}
	require 'inc.footer.php';
	?>
</div>