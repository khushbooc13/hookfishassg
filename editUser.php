<?php
   
   include('script/config.php');		// connect to database using config.php file
   //include('session.php');
   	$email=$_GET['email'];
	$edit="select * from userdetails where email='$email'";
	$result=mysqli_query($conn,$edit);
		if(isset($result)) 
		{
   			while($row = mysqli_fetch_array($result))
			{ 
				$name= $row['name'];
				$phone=$row['phone'];
			} 
		}
		else 
		{
   			echo "NO";
		}
?>