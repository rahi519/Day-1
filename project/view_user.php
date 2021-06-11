<!DOCTYPE html>
<html>
<head>
	<title>Homepage</title>
	<style>
	body{background-image: linear-gradient(to bottom right,pink,lightgreen);}
	</style>
	 <!-- Latest compiled and minified CSS -->
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">

<!-- jQuery library -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>

<!-- Popper JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
<?php
	session_start();
	$con = mysqli_connect("localhost","root","","web_app");
        if(mysqli_connect_error()){
            echo "Failed To Connet Database";
        }

	if(!isset($_SESSION['email'])){
		echo "<script>window.open('login.php','_self');</script>";  //same as php cose redirect to login.html as header('lcation:login.php');
	}

?>
<!-- Latest compiled JavaScript -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script> 
</head>
<body>
	<div class="container">
		<br>
		<h1 class="text-white bg-dark text-center">
			CRUD APPLICATION
		</h1>
		<div class="row">
			
			<div class="col-10">
			</div>
			<div class="col-2">
				<a href="add.php" class="btn btn-success float-left">Add New User</a>
				
			</div>
			<br><br>
			<div class="col-9">
			</div>
			<div class="col-3">

				<form action="view_user.php" method="post">
					<div class="input-group">
						<div class="form-outline">
							<input name="search_val" type="search"  class="form-control" placeholder="search">
						</div>
					<button type="submit" id="btn" class="btn btn-primary" name="search" >
						Search
					</button>
					</div> 
				</form>
				
			</div>
		</div>
			<br><br>
			

			<div id="d1" style="display: block;" class="table-responsive">
				<table class="table table-bordered table-stripped table-hover">
					<thead>
						<th>ID</th>	
						<th>Name</th>
						<th>Email</th>
						<th>Mobile</th>
						<th>Password</th>
						<th>Image</th>
						<th>Delete</th>
						<th>Update</th>
					</thead>
					<tbody>
						<?php

						
							$con = mysqli_connect("localhost","root","","web_app");
								if(mysqli_connect_error()){
									echo "Failed To Connet Database";
								}
						if(isset($_POST['search'])){
							if($_POST['search_val'] == ""){

						?>
								<tr>
									<td colspan="8" class="text-center"><?php echo "Please enter name to search!";  ?></td>
								</tr>
						<?php
						}
							else{

							$search_val=$_POST['search_val'];
							$select =mysqli_query($con,"SELECT * FROM data WHERE name LIKE '$search_val%'");
							$count = mysqli_num_rows($select);
							if($count == 0){ 
						?>

								<tr>
									<td colspan="8" class="text-center"><?php echo "No Data found!";  ?></td>
								</tr>

							<?php
								mysqli_close($con);	
							}
							else{


							while($row=mysqli_fetch_array($select)){
								$id=$row['id'];
								$name=$row['name'];
								$email=$row['email'];
								$mobile=$row['mobile'];
								$password=$row['password'];
								$image=$row['image'];

						?>
					<tr>
						<td><?php echo $id ?></td>
						<td><?php echo $name ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $mobile ?></td>
						<td><?php echo $password ?></td>
						<td><img src="upload/<?php echo $image; ?>" height="70px;"></td>
						<td><a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?> ">Delete</a></td>
						<td><a class="btn btn-success" href="update.php?id=<?php echo $id; ?>">Update</a></td>
					</tr>
				    <?php }//whilw end 
				    		}
				    	}
						}//if end
						else{
							$select =mysqli_query($con,"SELECT * FROM data");
							while($row=mysqli_fetch_array($select)){
								$id=$row['id'];
								$name=$row['name'];
								$email=$row['email'];
								$mobile=$row['mobile'];
								$password=$row['password'];
								$image=$row['image'];

						?>
					<tr>
						<td><?php echo $id ?></td>
						<td><?php echo $name ?></td>
						<td><?php echo $email ?></td>
						<td><?php echo $mobile ?></td>
						<td><?php echo $password ?></td>
						<td><img src="upload/<?php echo $image; ?>" height="70px;"></td>
						<td><a class="btn btn-danger" href="delete.php?id=<?php echo $id; ?>">Delete</a></td>
						<td><a class="btn btn-success" href="update.php?id=<?php echo $id; ?>">Update</a></td>
					</tr>
					<?php
						}//while end
					}//elsem end

				     ?>
				     <tr>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"></td>
				     	<td style="border: none;"><br><a class='btn btn-danger' href='logout.php'>Logout</a></td>
				     </tr>
				    
					</tbody>
				</div>
			</div>
		
			
		
</html>