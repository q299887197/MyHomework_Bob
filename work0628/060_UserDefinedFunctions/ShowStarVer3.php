<?php
function ShowStar($iCount, $sWhat = "*")  //  *為預設, 如果未設定$sWhat 將會使用預設的 *
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)
	{
		$result .= $sWhat; //串聯 $sWhat
	}
	echo $result;
}

$iHowMany = 2;
ShowStar($iHowMany,"^"); // 自行設定兩個參數 套用 function
?>