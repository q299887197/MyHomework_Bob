<?php
  
    echo "flag 1<br>";
    @require("MyLibrary.php");  // +@ 錯誤訊息不會顯示出來
    echo "flag 2<br>";  //在require已經錯誤了 ,因此不再顯示

?>