<?php
$a = 20; 
function myfunction($b) { //40帶入
	//print "a=$a<br>";
	$a = 30;  //直接指定a=30
	//print "a=$a<br>";
	global $a, $c;  // 有這行之後可以看到外面的 a  , 因此 $a = 20
	//print "a=$a<br>";
	return $c = ($b + $a);  // $c = 40+20 =60
}
print myfunction(40) + $c;  //將40帶入 myfunction()  >> 60+ $c >> 60+60 = 120

/////////////////////若隱藏global $a, $c; 答案會變成 70, 外面看不到 $c
?>
