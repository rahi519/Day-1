 <?php 
	$con = mysqli_connect("localhost","root","","web_app");
		if(mysqli_connect_error()){
			echo "Failed To Connet Database";
		}
			if(isset($_GET['id'])){
				$del_id= $_GET['id'];
				$delete = "DELETE FROM data WHERE id=$del_id";
				$run_del= mysqli_query($con,$delete);
				if($run_del === true)
				{
					echo "Record has been Deleted";
					header('location:view_user.php');
				}
				else{
				echo "Failed to Delete the Record!";
				}
			}
?>