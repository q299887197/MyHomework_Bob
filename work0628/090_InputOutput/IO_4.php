<?php
header("content-type: text/html; charset=utf-8");

$lines = file ( 'data.txt' ); //file 傳入黨名     讀取 data.txt
foreach ( $lines as $line_num => $line ) {
	echo "#<i>$line_num</i> : " . 
		 htmlspecialchars ( $line ) . "<br />\n";  //htmlspecialchars 將 < 轉成&lt 
}

?> 