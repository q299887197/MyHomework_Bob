<?php
  $x = getdate();
  echo gettype($x), "<br>";   //gettype取得變數內容形式
  
  $x = date('Y-m-d H:i:s');
  echo $x, "<br>";  //印出$x = 現在的時間 (年-月-日 時:分:秒) 格林威治標準時間
  echo gettype($x), "<br>";  //gettype取得變數內容形式
  
  $x = gmdate('Y-m-d H:i:s');  
  echo $x, "<br>"; //印出$x = 現在的時間 (年-月-日 時:分:秒) 格林威治標準時間 
  
  $x = strtotime(gmdate('Y-m-d H:i:s'));
  echo $x, "<br>";  //離 1970年的時間
  echo gettype($x), "<br>";//gettype取得變數內容形式
  
?>