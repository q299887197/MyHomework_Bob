<?php
  header("content-type: text/html; charset=utf-8");
  $s = '許功蓋';
  echo $s."<br>"; //印出許功蓋 連接換行
  echo strlen($s); // 印出UFT-8編碼 許功蓋字串長度
?>