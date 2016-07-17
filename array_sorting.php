<?php
echo "<pre>";
$array = [
'a' => 'foo',
'b' => 'bar',
'c' => 'baz'
];

$num = [
'a' => 1,
'b' => 3,
'c' => 4,
'd' => 2,
'e' => 8,
'f' => 5,
'g' => 9,
'h' => 6];

sort($array);

var_dump($array);
echo "<br>";
asort($num);
var_dump($num);
####################
echo "<br>----------------------------<br>";

$a = array("b"=>20,"a"=>10,"c"=>30);
krsort($a);

var_dump($a);
####################
echo "<br>----------------------------<br>";

$shuffle = array(
	'a' => 1,
	'b' => 2,
	'c' => 3,
	'd' => 4,
	'e' => 5,
	'f' => 6,
	'g' => 7,
	'h' => 8,
	'i' => 9,
	'j' => 10,
	'k' => 11,
	'l' => 12,
	'm' => 13,
	'n' => 14
	);
//shuffle($shuffle);
$chaves = array_keys($shuffle);
$rand = array_rand($shuffle);
//var_dump($shuffle);
var_dump($chaves);
echo "<br>";
echo $rand;
var_dump($shuffle);
echo "</pre>";