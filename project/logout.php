<?php
	session_start();
	$con = mysqli_connect("localhost","root","","web_app");
        if(mysqli_connect_error()){
            echo "Failed To Connet Database";
        }

	
		echo "<script>window.open('index.php','_self');</script>";  //same as php cose redirect to login.html as header('lcation:login.php');
		session_destroy();
	
?>