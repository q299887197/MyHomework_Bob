<?php
header("content-type: text/html; charset=utf-8");

$season = array(
    'spring' => '春', 
    'summer' => '夏', 
    'autumn' => '秋', 
    'winter' => '冬'); 
//    key 

echo "每年的四季分別為：<br>";
foreach ($season as $key => $value){  //用key 來解鎖 春夏秋冬  key只是變數名稱
	echo $key, "=>", $value, "<br>"; // 秀出 key => value
}


?>