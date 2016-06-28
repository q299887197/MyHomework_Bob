<?php
	$testArray = array("A1", "A2", "A18");
	sort($testArray); //自然排序法   依照字串大小排序在陣列
	var_dump($testArray);
	
	echo "<br />";
	
	natsort($testArray); // 依照數字大排序在陣列
	var_dump($testArray);
?>
