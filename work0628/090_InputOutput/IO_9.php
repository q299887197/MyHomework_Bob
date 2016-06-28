<?php
header("Content-Type: image/png");// MIME   告訴系統傳的是哪種圖檔  

$filename = "cc.png"; 
$fileHandle = fopen($filename, "rb");
echo fread($fileHandle, filesize($filename));
fclose($filename);

?>