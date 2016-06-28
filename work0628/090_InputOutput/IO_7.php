<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "";
$f = fopen("data.txt", "r");
while (!feof($f)) //feof  在檔案結尾處結束
{
	$line = fgets($f);  //fgets 從檔案讀一行出來 不包刮換行符號
	$sData .= Trim($line) . "<br>";
}
fclose($f);
echo $sData;

?>
