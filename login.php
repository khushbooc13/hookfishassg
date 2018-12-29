<?php
   include("config.php"); //connect to databse using config.php file
   session_start();
   if($_SERVER["REQUEST_METHOD"] == "POST")  // email and password sent from form 
   {
   		$email=$_POST['email'];
		$pass=$_POST['pass'];
		$sql = "SELECT * FROM login WHERE email = '$email' and password = '$pass'";
		$result = mysqli_query($conn,$sql);
		$row=mysqli_fetch_array($result);
		$count = mysqli_num_rows($result);
		if($count == 1)  // If result matched $email and $passw table row must be 1 row
		{
         	$_SESSION['login_user'] = $email;
 
			header('Location: ../welcome.php'); // redirect to welcome page(dashboard Page)
		}
		else
	{
		echo "<script type='text/javascript'>alert('Invalid email or password');window.location.href='../login.html'</script>"; // prompt if invalid email or password
	}
	}
	
?>
