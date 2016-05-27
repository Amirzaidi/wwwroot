<?php
$test = new test(['id' => 1]);
$test2 = new test([]);
$test->delete();
$test2->delete();
?>