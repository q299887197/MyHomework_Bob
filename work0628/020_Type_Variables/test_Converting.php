<?php

$a = 12;
$b = "34";

$result = $a + $b;  // 相加 PHP自動轉換成數字 >> 12+34=46
// $result = $a . $b; // 1234
// $result = $a + intval($b);  // 46

echo $result;

?>