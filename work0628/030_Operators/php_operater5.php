<?php
  $x = 1;
  $y = $x++;  // y=   X先指定給Y  X再執行++  >> Y=X的1  X=1+1=2 
  echo "x = $x, y = $y";  // X=2,Y=1
  
  echo "<br>";

  $x = 1;
  $y = ++$x; // y=  X先++ 在指定給Y   >>  Y=X先+1 >> 2 >>  X=1+1=2
  echo "x = $x, y = $y";// X=2,Y=2
?>
