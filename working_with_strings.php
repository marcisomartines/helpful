<?php
//strtr() used to translate certain characters of a string into other characters
//strtr(string,search,replace)

$sub = [
1=>'one',
2=>'two'
];

$string='11343r1231rdf231';
echo strtr($string,$sub);