<?php


    $a=$_POST['t1']; 
    $a1=$_POST['t2']; 
    $a2=$_POST['t3']; 
    $a3=$_POST['t4']; 
    $sum=$a1+$a2+$a3; 
    $avg=$sum/3;
    if($avg>=0&&$avg<=50)
        $grade="<span style='color:red'>Fail</span>";
    if($avg>50&&$avg<=70)
        $grade="<span style='color:green'>D</span>";
    if($avg>70&&$avg<=80)
        $grade="<span style='color:green'>C</span>";
    if($avg>80&&$avg<=90)
        $grade="<span style='color:green'>B</span>";
    if($avg>90)
        $grade="<span style='color:green'>A</span>";
    echo "<br>";
    echo "<font size=4><center>Student is:-".$a."</center><br>"; 
    echo "<font size=4><center>Total marks:-".$sum."</center><br>"; 
    echo "<font size=4><center>Grade is:-".$grade."</center>"; 

?>