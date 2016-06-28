<?php
	$score = 95;
	if ($score >=60 && $score < 70) {  //先判斷 60-70
		echo 'D';
	} elseif ($score>=70 && $score<80) {  // 70-80
		echo 'C';
	} elseif ($score>=80 && $score<90) {  //80-90
		echo 'B';		
	} elseif ($score>=90 && $score<=100) {  //90-100
		echo 'A';		
	} else {
		echo 'Fail'; // 以上皆非
	}
?>