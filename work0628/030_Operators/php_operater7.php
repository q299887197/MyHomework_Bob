<?php
  $x = 3;
  if ($x >= 10 && foo()) // &&且的意思, $x 不大於10 ,因此foo()不用做
    echo "yes";
  else
    echo "no"; //直接跳到else 顯示 no
    
  echo "<hr>";

  $x = 3;
  if ($x >= 10 & foo()) // &和 , 比較大小和做foo()
    echo "yes";
  else
    echo "no"; //先跑過foo() , 再跳else 顯示no
    
function foo()
{
   echo "foo() is running.<br>";  //代表跑過這 function
}


// &&會先檢查面條件,若不成立後面的不用再進行檢查判斷

?>


