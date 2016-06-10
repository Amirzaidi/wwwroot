<?php
$nav = [
	['#add', 'Add', 'Add a new country'],
	['#countries', 'All', 'Show all countries']
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
		new country($_POST);
		echo '<div class="green">Country ', $_POST['name'], ' has been added</div>';
	}
	?>
	<div>
		<form action="/manage/country" method="post">
			<div><input type="text" name="name" placeholder="Name" /></div>
			<div><textarea name="desc" placeholder="Description"></textarea></div>
			<div><select name="continent">
			<?php
			$continent = new continent(false);
			while ($continent->found())
			{
				echo '<option value="', $continent->id, '">', $continent->name, '</option>';
			}
			?>
			</select></div>
			<div><input type="submit" value="Add"/></div>
		</form>
	</div>
	<?php
	$contest = new contest(false);
	?>
	<div id="contests">
		<?php echo $contest->count(); ?> contests found (10 newest shown)
	</div>
	<?php
	$i = 0;
	$max = 10;
	if (isset($uri[0]) && $uri[0] == 'all')
	{
		$max = 10000;
	}

	while ($contest->found() && $i++ < $max)
	{
	?>
	<div id="<?php echo $i; ?>">
		<?php
		if ($contest->start == 0)
		{
			echo $contest->name, ': ', $contest->desc, ' [queued]';
		}
		else if ($contest->end == 0)
		{
			echo $contest->name, ': ', $contest->desc, ' [active since ', date('H:i:s d-m-Y', $contest->start), ']';
		}
		else
		{
			echo $contest->name, ': ', $contest->desc, ' [', date('H:i:s d-m-Y', $contest->start), '] to [', date('H:i:s d-m-Y', $contest->end), ']';

			$medal = $contest->medal();
			while ($medal->found())
			{
				echo '<br/><a href="/manage/country/', $medal->country->id, '">', $medal->country->name, '</a> won ', $medal->type;
			}
		}
		?>
	</div>
	<?php
	}
	?>
	<div id="4">
		<center>Made by Amir Zaidi<br/>Web Design Template</center>
	</div>
</div>