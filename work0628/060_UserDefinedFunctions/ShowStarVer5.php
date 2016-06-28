<?php
function ShowStar($iCount, $sWhat = "*") // *為預設, 如果未設定$sWhat 將會使用預設的 *
{
	if ($iCount <= 0)  //設定 如果 <=0 顯示 "iCount > 0 please"
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20) //設定 如果 >20 顯示 "iCount <= 20 please"
	{
		echo "iCount <= 20 please";
		return;
	}
	 /////////////////// 在上面範圍之外的 run 下列程式
	$result = "";
	for ($i = 1; $i <= $iCount; $i++) // 1~2
	{
		$result .= $sWhat; //跑兩次串聯* ,  因此 **
	}
	echo $result; //回傳
}

$iHowMany = 2;
ShowStar($iHowMany); //2帶入
?>