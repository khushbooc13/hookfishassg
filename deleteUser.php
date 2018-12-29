<?php
	include('config.php');
		$email=$_GET['email'];
		echo "$email";
		$delete = "DELETE FROM userdetails WHERE email='$email'";
		$result=mysqli_query($conn,$delete);
		if(isset($result)) {
   			header("Location:../displayUser.php");
		} else {
   			echo "NO";
}
?>

