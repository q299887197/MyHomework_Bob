<?php
$sData = "";
$f = fopen("pick3.txt", "r");
while (!feof($f))
{
	$line = fgets($f);
	$sData .= Trim($line);
}
fclose($f);
//echo $sData;

// GetHotCodeList
$result = "01234567890";
$iLen = strlen($sData);
for ($iPos = 0; $iPos < $iLen; $iPos++)
{
	$ch = substr($sData, $iPos, 1);  //從$sData 第 $iPos位子 抓1瑪出來給 $ch
	$result = $ch . str_replace($ch, "", $result);
	// ch連接  str_replace (取代前的字串,取代後字串,要取代的字串);
}
echo substr($result, 0, 5) . "-" . substr($result, 5, 5); //印出
?>