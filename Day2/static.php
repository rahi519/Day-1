<!DOCTYPE html>
<html>
<body>
 
<?php
function example() {
    static $v = 3;
    echo $v;
    $v--;
}
 
example();
echo "<br>";
example();
echo "<br>";
example();
?>
 
</body>
</html>