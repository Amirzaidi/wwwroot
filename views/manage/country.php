<?php
$nav = [
	['/manage/country#add', 'Add', 'Add a new country'],
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
	if (count($_POST) == 3)
	{
		new country($_POST);
		echo '<div class="green">Country ', $_POST['name'], ' has been added</div>';
	}
	?>
	<div>
		<form action="/manage/country/edit" method="post">
			<?php
			if (isset($uri[0]) && is_numeric($uri[0]))
			{
				$_POST['id'] = $uri[0];
			}

			if (isset($_POST['id']))
			{
				$country = new country(intval($_POST['id']));
				if ($country->found())
				{
					$noAdd = false;
					if (count($_POST) == 4)
					{
						$country->name = $_POST['name'];
						$country->desc = $_POST['desc'];
						$country->continent = intval($_POST['continent']);
						$country->update();
					}
					?>
			<input type="hidden" name="id" value="<?php echo $country->id; ?>" />
			<div><input type="text" name="name" placeholder="Name" value="<?php echo $country->name; ?>" /></div>
			<div><textarea name="desc" placeholder="Description"><?php echo $country->desc; ?></textarea></div>
			<div><select name="continent">
			<option value="<?php echo $country->continent->id; ?>"><?php echo $country->continent->name; ?></option>
			<?php
			$continent = new continent(false);
			while ($continent->found())
			{
				if ($continent->id != $country->continent->id)
				{
					echo '<option value="', $continent->id, '">', $continent->name, '</option>';
				}
			}
			?>
			</select></div>
			<div><input type="submit" value="Edit Country"/></div>
					<?php
				}
			}

			if (!isset($noAdd))
			{
			?>
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
			<div><input type="submit" value="Add Country"/></div>
			<?php
			}
			?>
		</form>
	</div>
	<?php
	$country = new country(false);
	while ($country->found())
	{
	?>
	<div>
		<?php
		echo '[', $country->continent->name, '] <a href="/manage/country/', $country->id, '">', $country->name, '</a> - ', $country->desc;
		$reason = $country->reason();
		while ($reason->found())
		{
			echo '<br/>Remove reason: <a href="/manage/reason/remove/', $reason->id, '">', $reason->name, '</a> - ', $reason->desc;
		}

		$slang = $country->slang();
		while ($slang->found())
		{
			echo '<br/>Remove slang: <a href="/manage/slang/remove/', $slang->name, '">', $slang->name, '</a>';
		}
		?>
	</div>
	<div>
		<form action="/manage/reason/add" method="post">
			<div><input type="text" name="name" placeholder="Name" /></div>
			<div><textarea name="desc" placeholder="Description"></textarea></div>
			<div><select name="country">
			<?php
			$country = new country(false);
			while ($country->found())
			{
				echo '<option value="', $country->id, '">', $country->name, '</option>';
			}
			?>
			</select></div>
			<div><input type="submit" value="Add Reason"/></div>
		</form>
	</div>
	<div>
		<form action="/manage/slang/add" method="post">
			<div><input type="text" name="name" placeholder="Name" /></div>
			<div><select name="country">
			<?php
			$country = new country(false);
			while ($country->found())
			{
				echo '<option value="', $country->id, '">', $country->name, '</option>';
			}
			?>
			</select></div>
			<div><input type="submit" value="Add Slang"/></div>
		</form>
	</div>
	<?php
	}
	require 'inc.footer.php';
	?>
</div>