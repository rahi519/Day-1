<!DOCTYPE html>
<html>
<head>
	<title>Add Data</title>
	<!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>

<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="container">
		<div>
  				<h1 class="text-white bg-dark text-center">Regestration Form</h1>
 				
 		</div>
 	
 		<div class="col-lg-8 m-auto d-block">
 			<form action="add.php" method="post" name="myform" onsubmit="return validateform()" enctype="multipart/form-data">

 				<div class="form-group">
 					<lable for="uname"><b>User Name : </b></lable>
 					<input type="text" name="name" id="user_n"  class="form-control" placeholder="Name">
 				</div>
 				<div class="form-group">
 					<lable for="uemail"><b>User Email :</b> </lable>
 					<input type="email" name="email" id="user_e" class="form-control" placeholder="mail of user">
 				</div>
 				<div class="form-group">
 					<lable for="umobile"><b>User Mobile Number :</b> </lable>
 					<input type="number" name="mobile" id="user_m" class="form-control" placeholder="User MobileNumber">
 				</div>
 				<div class="form-group">
 					<lable for="uname"><b>User password :</b> </lable>
 					<input type="password" name="password" id="use_p"  class="form-control" placeholder="**********">
 				</div>
 				<div class="form-group">
 					<lable for="uphoto"><b>User profile Pic :</b> </lable>
 					<input type="file" name="image" id="img" onchange="validateImage()" class="form-control">
 				</div>

 				<input type="submit" name="submit" value="Add User" class="btn btn-success">
 			</form>
 		</div>
		</div>
		<?php 
		
		$con = mysqli_connect("localhost","root","","web_app");
			if(mysqli_connect_error()){
				echo "Failed To Connet Database";
			}
		if(isset($_POST['submit'])){
			$name=$_POST['name'];
			$email=$_POST['email'];
			$mobile=$_POST['mobile'];
			$password=$_POST['password'];
			$image =$_FILES['image']['name'];
			$tmp_name =$_FILES['image']['tmp_name'];



			//inset data into table
			$result = mysqli_query($con , "INSERT INTO data (name , email , mobile , password, image ) VALUES ('$name','$email','$mobile','$password','$image')");
			
			if($result === true){
				echo "Database has been inserted";
				move_uploaded_file($tmp_name, "upload/$image");
				header('location:view_user.php');
			}
			else{
				echo "Failed ,try again";
			}
			//echo "User added Succesfully. <a href='index.php'>View Users</a>";
			mysqli_close($con);
		}

	?>
	
	<script type="text/javascript">
	
	function validateform(){

		//name validation
		var nam=document.myform.name.value;
                if(nam==null || nam==""){
                    alert("Name is required");
                    return false;
                   }

        //email validation
        var em=document.forms["myform"]["email"].value;
                var pattern1=/^[a-z0-9]+[@][a-z]+[.][a-z]{2,3}([.][a-z]{2})*$/;    
                if(em.match(pattern1)){
                      
                    }
                else{
                    alert("Invalid email please check!");
                    return false;
                }
        //password validation
        var pas=document.myform.password.value;
               //  if(pas.match(pattern2) && (pas.length>=6  && pas.length<=12)) 
                if(pas.length<="6"  || pas.length>="12")
                    {
                       alert("password must be of length 6 to 12!"); 
                       return false;                       
                    }
        //mobile number validation
        var mo= document.myform.mobile.value;
                var pattern3=/^\d{10}$/;
                if(mo.match(pattern3)){
                }
                else{
                    alert("invalid mobile number!");
                    return false;
                }
	}

	//image validation
	function validateImage() {
    	var formData = new FormData();
    	var file = document.getElementById("img").files[0];
    	formData.append("Filedata", file);
    	var t = file.type.split('/').pop().toLowerCase();
    	if (t != "jpeg" && t != "jpg" && t != "png" && t != "bmp" && t != "gif") {
        	alert('Please select a valid image file');
        	document.getElementById("img").value = '';
        	return false;
   	 	}
    	if (file.size > 5120000) {
        	alert('Max Upload size is 5MB only');
        	document.getElementById("img").value = '';
        	return false;
    	}
    return true;
	}
</script>

</body>
</html>