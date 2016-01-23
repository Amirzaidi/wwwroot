IP Found: 
<?php
echo ipvote::exists($_SERVER['REMOTE_ADDR']) ? 'yes' : 'no';
?>