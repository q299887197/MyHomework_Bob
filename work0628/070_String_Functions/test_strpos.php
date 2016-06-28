<?php

$s = "ABC1234ABC";
//////0123
$iPos - strpos($s, "1234"); //找出字串出現的第一個位子 3

if($iPos !== false) {
    echo "found";
}
else {
    echo "not found";
}

?>