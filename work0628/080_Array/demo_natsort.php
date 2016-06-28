<?php

$a = array('a1', 'a3', 'a20', 'a15');

natsort($a); //自然排列 數字大小

//var_dump(natsort($a));
//echo "<br>";

foreach ($a as $k => $x)
{
	echo "$k => $x <br>";
}

?>
