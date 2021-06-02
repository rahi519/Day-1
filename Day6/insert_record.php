<?php
$connection = mysqli_connect("localhost", "root", "", "db_internship");


if($_POST)
{
    $name = $_POST ["txt1"];
    $gender = $_POST ["txt2"];
    $mobile = $_POST ["txt3"];

    $q = mysqli_query($connection, 
    "insert into tbl_user(user_name, user_gender, user_mobile)  values ('{$name}','{$gender}','{$mobile}')")
    or die (mysqil_error($connection));
    if($q)
    {
        echo "<script>Alert('Record added')</script>";
    }
}




?>

<html>
<body>
    <form method="post">
    Name:<input type="text" name="txt1"/>
    <br/>Gender: <select name="txt2">
            <option> Male </option>
            <option> Female </option>
            </select>
    <br/>Mobile No:<input type="number" name="txt3"/>
    <br/><input type="Submit">

    
    
    
    
    </form>

</body>
</html>