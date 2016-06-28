<?php
  $d = strtotime("2012-09-10");
  // $d = strtotime("2012-09-10 -3 days");
  // $d = strtotime("2012-09-10 +1 month");
  echo $d; // mktime 印出的為 離1970年1月1日00:00:00的相差秒數
  echo "<br>";
  echo date("Y-m-d", $d); // Y年 m月 d日  
?>
