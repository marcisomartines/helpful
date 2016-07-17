<?php
$stack = array();
echo "<pre>";
array_push($stack,"marciso","gonzalez","martines");
var_dump($stack);

$last_in = array_pop($stack);
var_dump($last_in,$stack);
/***************************/
$queue = array("elemento 1","elemento 2","elemento 3","elemento 4");

var_dump($queue);
array_shift($queue);
echo "*********************<br>";
var_dump($queue);

echo "*********************<br>";
array_unshift($queue, "elemento 5");
var_dump($queue);