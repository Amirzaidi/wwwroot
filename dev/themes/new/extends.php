<?php
header('Content-Type: text/css');
for ($i = 0; $i < 1000; $i++)
echo 'input#c', $i, ':checked ~ div#e', $i, ' > div.collapse { max-height: 400px; opacity: 1 }
input#c', $i, ':checked ~ div#e', $i, ' > label { max-height: 0 }
';
?>