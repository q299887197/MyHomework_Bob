<?php
header("content-type: text/html; charset=utf-8");

$season = array(  
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
    
print_r($season); //輸出season陣列
echo "<hr>"; //線
var_dump($season);  //將陣列 season內容輸出
?>