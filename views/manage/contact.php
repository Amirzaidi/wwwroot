<?php
$nav = [];
require 'inc.manage.php';
?>
<div id="container" class="main">
	<div class="top dark">
		<center><h1>[title]</h1></center>
	</div>
	<div id="add" style="height: 160px; padding: 0; background: url('http://thumbs.dreamstime.com/t/seamless-background-forest-green-summer-birch-trees-bushes-38722994.jpg') repeat-x">
	</div>
	<?php
	if (isset($uri[0]) && is_numeric($uri[0]))
	{
		$contact = new contact(intval($uri[0]));
		if ($contact->found())
		{
			$contact->delete();
			echo '<div class="green">Contact form from ', $contact->ip, ' has been removed</div>';
		}
	}
	?>
	<?php
	$contact = new contact(false);
	while ($contact->found())
	{
	?>
	<div>
		<?php
		echo '<a href="/manage/contact/', $contact->id, '">[Dismiss]</a> ', $contact->name, ' - from ', $contact->ip, '<br/><b>', $contact->subject, '</b><br/>', nl2br($contact->content);
		?>
	</div>
	<?php
	}
	require 'inc.footer.php';
	?>
</div>