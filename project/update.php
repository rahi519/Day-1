<!DOCTYPE html>
<html>
<head>
	<title>Update Form</title>
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
  				<h1 class="text-white bg-dark text-center">Update Form</h1>
 				
 		</div>
 		 	
 		<div class="col-lg-8 m-auto d-block">
 	 <?php 
		$con = mysqli_connect("localhost","root","","web_app");
		if(mysqli_connect_error()){
			echo "Failed To Connet Database";
		}
			if(isset($_GET['id'])){
				$edit_id= $_GET['id'];
				$select =mysqli_query($con,"SELECT * FROM data WHERE id='$edit_id'");
				$row=mysqli_fetch_array($select);
						$name= $row['name'];
						$email=$row['email'];
						$mobile=$row['mobile'];
						$password=$row['password'];
						$image=$row['image'];
										
			}
	?>
 			<form action="" method="post" name="myform" onsubmit="return validateform()"  enctype="multipart/form-data">

 				<div class="form-group">
 					<lable for="uname"><b>User Name : </b></lable>
 					<input type="text" name="name"   value="<?php echo $name; ?>" id="user_n" class="form-control" placeholder="Name">
 				</div>
 				<div class="form-group">
 					<lable for="uemail"><b>User Email :</b> </lable>
 					<input type="email" name="email" value="<?php echo $email; ?>"id="user_e" class="form-control" placeholder="mail of user">
 				</div>
 				<div class="form-group">
 					<lable for="umobile"><b>User Mobile Number :</b> </lable>
 					<input type="number" name="mobile" value="<?php echo $mobile; ?>" id="user_m" class="form-control" placeholder="User MobileNumber">
 				</div>
 				<div class="form-group">
 					<lable for="uname"><b>User password :</b> </lable>
 					<input type="password" name="password" id="use_p" value="<?php echo $password; ?>" class="form-control" placeholder="**********">
 				</div>
 				<div class="form-group">
 					<lable for="uphoto"><b>User profile Pic :</b> </lable>
 					<input type="file" name="image" id="img"  onchange="validateImage()" class="form-control">
 				</div>

 				<input type="submit" name="u_submit" value="Update" class="btn btn-success">
 			</form>
 		</div>
		</div>
		
		<?php 
		
		$con = mysqli_connect("localhost","root","","web_app");
			if(mysqli_connect_error()){
				echo "Failed To Connet Database";
			}

		if(isset($_POST['u_submit'])){

			$u_name=$_POST['name'];
			$u_email=$_POST['email'];
			$u_mobile=$_POST['mobile'];
			$u_password=$_POST['password'];
			$u_image =$_FILES['image']['name'];
			$u_tmp_name =$_FILES['image']['tmp_name'];

			if(empty($u_image)){
				$u_image = $image;

			}
			//inset data into table
			$qry = "UPDATE data SET name='$u_name' , email='$u_email' ,mobile='$u_mobile' , password='$u_password', image='$u_image' WHERE id='$edit_id'";
			echo $qry;
			$u_result = mysqli_query($con ,$qry);

			if($u_result === true){
				echo "Database has been Updated";
				move_uploaded_file($u_tmp_name, "upload/$u_image");
				header("location:view_user.php");
				
			}
			else{
				echo "Failed ,try again";
			}
			
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