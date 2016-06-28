<?php

echo "Path and FileName:" . __FILE__ . "<br />";  //何處
echo "Path: " . dirname ( __FILE__ ) . "/data/team.txt" ,"<br />";  // 現在位子
echo "Filename: " . basename ( __FILE__ ) . "<br />"; //正斜線最後檔名
echo "Filesize: " . filesize ( __FILE__ )  //檔案大小

?>