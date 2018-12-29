<?php
   
   include('../script/config.php');		// connect to database using config.php file
   include('session.php');
   if($_SERVER["REQUEST_METHOD"] == "POST")  // email and password sent from form 
   {
	$name=$_POST['name'];
	$email=$_POST['email'];
	$phone=$_POST['phone'];
	$query="select * from userdetails where email='$email'";
	$result=mysqli_query($conn,$query);
	if(mysqli_num_rows($result)>0)
	{
		echo "<script type='text/javascript'>alert('User with similar email id already registered');window.location.href='../addUser.php'</script>";
	}
	else
	{
		
		$sql = $conn->prepare("insert into userdetails values(?,?,?)");
		//echo "$sql";
    	$sql->bind_param('sss',  $name, $email, $phone);
    	$sql->execute();
    	header("Location:../addUser.php");
	}
}
?>