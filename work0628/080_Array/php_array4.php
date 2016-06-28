<?php
    header("content-type: text/html; charset=utf-8");
    
    $myArray = array('myName'=>'Jeremy', 
                     'myHeight'=>191, 
                     'myWeight'=>91);
    //  => 為指向意思    'myName'=>'Jeremy' 等於  $myArray['myName'] = 'Jeremy';
    
    echo "大家好，我的名字叫".$myArray['myName']
?>