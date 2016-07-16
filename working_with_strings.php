<?php
//strtr() used to translate certain characters of a string into other characters
//strtr(string,search,replace)

$sub = [
1=>'one',
2=>'two'
];

$string='11343r1231rdf231';
echo strtr($string,$sub);

//Comparing
$string1 = "marciso";
$string2 = "marciso";
echo "<br>";
var_dump(strcmp($string1, $string2));
echo "<br>";
var_dump(strcasecmp($string1, $string2));

//simple search and replacing 
echo "<br>";
$search = "world";
$replace = "reader";
$string3 = "hello world";
echo str_replace($search,$replace,$string3);

//using arrays
$replace = ['hello', 'world'];
$string = ["ola", "mundo"];
echo "<br>";
echo str_replace($replace,$string,"hello world");