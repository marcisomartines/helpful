<?php
function countAll(&$count){
	if(func_num_args()==0){
		die("You need to specify at least one argument");
	}else{
		$args = func_get_args();//will return a array
		//remove the defined argument from the beginning
		array_shift($args);//the first element is a int, must be remove
		//var_dump($args);
		foreach($args as $arg){
			$count += strlen($arg);
		}
	}
}

$count=0;

countAll($count,"four","bar","baz");

echo $count;