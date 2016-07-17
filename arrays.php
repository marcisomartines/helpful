<?php
//$a = array();
//$a = [];
//$a[]= '';
$a = array();
$b='';
var_dump(is_array($a));
echo '<br>';
echo count($a);
echo '<br>';
var_dump(is_array($b));
echo '<br>';
var_dump(array_key_exists('a',$a));//retorna falso se não existir a chave
$c = ['a' => 'a',
	  'b' => 'b',
	  'c' => 'c'
	 ];

echo "<br>----------array_flip()<br>";
var_dump(array_flip($c));
echo "<br>----------array_reverse()<br>";
var_dump(array_reverse($c));