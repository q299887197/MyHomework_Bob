<?php
header("content-type: text/html; charset=utf-8");

if(isset($_POST["number"])) {  //串在陣列裡面
    $x = 1;
    for($i = 0 ; $i < 49 ; $i++ ){
        $a[$i]=$x; //a[0]=1,a[1]=2,a[2]=3,a[3]=4......a[48]=49
        $x++ ;
    }
    
}

     $open[] = "";
    for($i = 0 ; $i < 6 ;){
         $number=rand(1,49);
        if($a[$number]!=null)
        {
            $open[$i] = $a[$number]; 
  

            $a[$number] = null; //使號碼不重複
            $i++;
        }
    }

    //  echo $open['0'] ."<br>" .$open['1']."<br>" .$open['2']."<br>" .$open['3']."<br>" .$open['4']."<br>" .$open['5']."<br>" ;   

?>

<html>
<head>
    <title>BigLotto</title>
</head>
<body>
    <center>
        <TABLE BORDER="1"  WIDTH="50%"> 
        <br>
        <h1>六合彩</h1>
        <h3>中獎號碼</h3> 

        <TR align="center">
            <TD><?php echo $open['0']; ?> </TD>
            <TD><?php echo $open['1']; ?></TD>
            <TD><?php echo $open['2']; ?></TD>
            <TD><?php echo $open['3']; ?></TD>
            <TD><?php echo $open['4']; ?></TD>
            <TD><?php echo $open['5']; ?></TD>

        </TR>
       
        </TABLE>
        <br>
        <form method="post">
            <input type="submit" id="number"name="number" value="開獎">
            
    </form>
    </center>
</body>
</html>    