<?php
function cmp($a, $b)
{
    if ($a == $b) {
        return 0;
    }
    return ($a < $b) ? -1 : 1; //傳1時 交換  若a<b的話為-1, a>b為1
}

$a = array(3, 2, 5, 6, 1);
usort($a, "cmp");  //usersort  將字串a帶入 function cmp 內做比較
foreach ($a as $key => $value) {  //將a陣列取出帶入 key => $value
    echo "$key: $value <br />"; // key為 0.1.2.3.4
}

?>