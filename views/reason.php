<?php
if (isset($uri[0]) && is_numeric($uri[0]))
{
	$country = new country(intval($uri[0]));
	if ($country->found())
	{
		$reason = $country->reason();
	}
}

if (!isset($reason))
{
	router::redirect($session->lastpage);
}

$css = ['/style/parts/main.css'];
?>
<div id="select1">
<div id="select2">
<div id="select3">
<div id="select4">
	<a href="/" id="back" class="button"><div>&laquo;</div></a>
	<a href="#" id="close" class="button"><div>&#215;</div></a>
	<?php
	$i = 0;
	while ($reason->found() && $i++ < 4)
	{
	?>
	<div id="part<?php echo $i; ?>" class="part">
		<div style="background: url('/style/images/reason_<?php echo strtolower(str_replace(' ', '', $reason->name)); ?>.jpg') center; background-attachment: local; background-size: cover;">
			<a href="#select<?php echo $i; ?>" class="button"><div>+</div></a>
			<div style="background: #fff">
				<h1><?php echo $reason->name; ?></h1>
				<?php echo $reason->desc; ?>
			</div>
		</div>
	</div>
	<?php
	}
	?>
</div>
</div>
</div>
</div>
<?php require 'inc.translate.php'; ?>