<!DOCTYPE html>
<html>
<body>
 
<?php  
$year = 2020;  
 
if((0 == $year % 4) & (0 != $year % 100) | (0 == $year % 400))
{
echo "$year is a Leap Year.";    
}
 
else  
{  
echo "$year is not a Leap Year.";    
}
?> 
 
</body>
</html>