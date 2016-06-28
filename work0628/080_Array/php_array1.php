<?php
$bloodType[] = 'A';
$bloodType[] = 'B';  //自動接順序數字
$bloodType[] = 'AB'; //自動接順序數字
$bloodType[] = 'O';  //自動接順序數字

for ($i = 0; $i <= 3; $i++) {
	echo $bloodType[$i] . "<br />"; // 印出bloodType 連接 <br>
}
?>