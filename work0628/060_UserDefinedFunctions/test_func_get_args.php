<?php

echo calcTotal(1, 2, 3, 4, 5);

function calcTotal () {
	$args = func_get_args();
	// var_dump($args);
	$total = 0;
	foreach ($args as $value) {
		$total += $value; // 1+2+3+4+5=15
	}
	return $total;  // 15
}


?>
