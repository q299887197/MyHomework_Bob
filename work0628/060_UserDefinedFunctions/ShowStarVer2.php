<?php
function ShowStar($iCount)  //3被帶入 , 因此 $iCount = 3
{
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)  //執行3次
	{
		$result .= "*";  // . 串聯
	}
	echo $result; //印出 ***
}

$iHowMany = 3;
ShowStar($iHowMany); //變數3帶入 function
?>