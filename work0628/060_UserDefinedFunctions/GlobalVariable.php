<?php
$a = 20;
function myFunction($b) {
	//echo "a = $a<br>";
	$a = 30;
	//echo "a = $a<br>";
	global $a, $c;  //看到外面的$a = 20; 
	//echo "a = $a<br>";
	return $c = ($b + $a); //因此 C= 20+40 = 60
}
// 請預測答案是多少?
echo myFunction(40) + $c;  // 60+60 =120
?>