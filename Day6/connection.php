<?php
$host = "localhost";
$username = "root";
$passwd = "";
$dbname = "db_internship";

//connection function
$connection = mysqli_connect($host, $username, $passwd, $dbname);
$q = mysqli_query($connection,
    "insert into tbl_user(user_name, user_gender, user_mobile) values('Rahi', 'Female', '9714481634')") 
    or die("Error".msqli_error($connection));

if($q)
{
    echo "<script>Alert('Record Added'); </script>";
}


?>