IP Found: 
<?php
$ip = router::ip();

$ipvote = new ipvote($ip);
echo $ipvote->found() ? 'yes' : 'no';
?>