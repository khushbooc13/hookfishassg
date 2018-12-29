<?php
   
   echo "hi";
   include('config.php');	
   $name=$_GET['name'];
   $phone=$_GET['phone'];
   $email=$_GET['email'];	
   $update="update userdetails SET name= '$name' where email='$email'";
   echo "$update";
		if (mysqli_query($conn, $update)) {
    echo "Record updated successfully";
} else {
    echo "Error updating record: " . mysqli_error($conn);
}
   		//echo "<script type='text/javascript'>alert('Update Succesfully');window.location.href='../displayUser.php'</script>";
 
   	?>