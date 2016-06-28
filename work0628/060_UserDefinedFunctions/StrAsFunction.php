<?php

function test($i) {
	return $i + 1;
}

function test100($i) {
	return $i + 100;
}

// $x = 1;
// echo test($x);  // 1+1 = 2

$x = 2;
$p = "test"; 
$k = "test100"; 
echo $p($x); // 間皆呼叫 test($x)  2+1=3
echo '<br>';
echo $k($x); // 間皆呼叫 test100($x)  2+100=102

?>