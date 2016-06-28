<?php
$f = fopen("pick3.txt", "r"); //讀取pick3.txt 
while (!feof($f))
{
	$line = fgets($f);
	echo "$line<br>";
}
fclose($f); //關閉文件
echo "--End--";
?>