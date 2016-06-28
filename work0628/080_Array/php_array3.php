<?php

$bloodType = array("A", "B", "AB", "O");
/////////////////// 0    1     2    3 
$bloodType[3] = "xy"; //取代 "O"

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />";
}

?>
