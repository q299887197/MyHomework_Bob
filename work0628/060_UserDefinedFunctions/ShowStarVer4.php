<?php
function ShowStar($iCount, $sWhat = "*")  // *為預設, 如果未設定$sWhat 將會使用預設的 *
{
	if ($iCount > 0)
	{
		if ($iCount <= 20)  // 設定  0 < iCount <= 20 
		{
			$result = "";  //初設空值
			for ($i = 1; $i <= $iCount; $i++) //run 1~帶入值
			{
				$result .= $sWhat;  //串聯
			}
			echo $result;
		}
		else 
			echo "iCount <= 20 please.";  //因為帶入的數字為 21 因此跳到這行 大於20
	}
	else
	{
		echo "iCount > 0 please.";
	}
}

$iHowMany = 21;
ShowStar($iHowMany); // 21帶入
?>