<?php
header("content-type: text/html; charset=utf-8");
 
$sData = "line1\nline2\nLine3\n";
$dataArray = explode("\n", $sData);
$f = fopen("data2.txt", "w"); // W 寫文字檔 A是附加寫 R讀取
foreach ($dataArray as $line) {
    //逐一取出來
	fputs($f, $line . "\n", strlen($line) + 1); 
}
fclose($f);
echo "-- Done --"

?>
