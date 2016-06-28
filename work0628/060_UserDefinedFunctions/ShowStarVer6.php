<?php

function ShowStar() {
	$args = func_get_args();
	
	if (!isset($args[0]))
		$args[0] = 5;
	if (!isset($args[1]))
		$args[1] = "*";
	ShowStar_all($args[0], $args[1]);  //ShowStar_all(5,*)帶入
}

function ShowStar_all($iCount, $sWhat = "*") // 5,* 帶入 
{
	if ($iCount <= 0)
	{
		echo "iCount > 0 please";
		return;
	}
	if ($iCount > 20)
	{
		echo "iCount <= 20 please";
		return;
	}
	
	$result = "";
	for ($i = 1; $i <= $iCount; $i++)  //5在 0< ~ <=20 5 之間, 迴圈跑5次
	{
		$result .= $sWhat; // *串聯五次 >> *****
	}
	echo $result;
}

ShowStar(2, "^"); //2在 0< ~ <=20 5 之間, 迴圈跑2次 >> ^^
// ShowStar(null, "$");//空值進去被指定為5 ,  5在 0< ~ <=20 5 之間, 迴圈跑5次
// ShowStar(); //5在 0< ~ <=20 5 之間, 迴圈跑5次
?>