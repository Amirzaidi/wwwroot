IP Found: 
<?php
$ip = router::ip();

$ipvote = new vote($ip);
echo $ipvote->found() ? 'yes' : 'no';
?>