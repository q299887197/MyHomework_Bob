<?php
header("content-type: text/html; charset=utf-8"); //若沒此行編碼 會亂碼

	$contents = file_get_contents('data.txt');  // file_get_contents 得到的是字串
	echo (str_replace("\r\n", "<br />", $contents)); // 將$contents內的\r\n這個符號都換成<br />
?>