<?php
//strpos(string, search) return the position of the substring
$string = "123456789987654321";
$search = "123";

echo strpos($string, $search); // will output 0, the first position that is found the string
echo "<br>";
//strstr();
//is slower that strpos()
//return everything after the start of the search
$string2 = 'abcdefghijklmnopqrstuvwxyz';
$search2 = 'op';

echo strstr($string2,$search2);