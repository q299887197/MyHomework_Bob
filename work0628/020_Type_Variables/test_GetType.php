<?php
  $x = 123;
  echo gettype($x), "<br>";  //gettype取得變數內容形式 integer
  
  $x = 123.0;
  echo gettype($x), "<br>";  //gettype取得變數內容形式 double

  $x = "123.0";
  echo gettype($x), "<br>";  //gettype取得變數內容形式 string
  
  $x = TRUE;
  echo gettype($x), "<br>";  //gettype取得變數內容形式 boolean
  
?>