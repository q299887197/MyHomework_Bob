<?php
header("content-type: text/html; charset=utf-8");

$a = array('xxx',  // 0
        'book' => '書籍', 
        'yyy',  // 1
        'desk' => '書桌', 
        'pen' => '筆');

foreach ($a as $k => $s)
{
	 echo "$k = $s<br>";
}

?>