<?php

$a = array('1', '2');
foreach ($a as $k => $x) 
{
	$x = '3';
}

foreach ($a as $k => $x) //將a存入 $k => $x    0 => 1   1 => 2
{
	echo "$k => $x <br>"; //印出  0 => 1   1 => 2
}

?>