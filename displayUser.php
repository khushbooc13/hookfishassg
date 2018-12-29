<style>
input[type=submit] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=button] {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    border-radius: 4px;
    cursor: pointer;
}

input[type=submit]:hover {
    background-color: #45a049;
}
table {
  border-collapse: collapse;
  border: 1px solid black;
}
</style>


<?php
	include('script/config.php');		// connect to database using config.php file
   	include('script/session.php');
   	$result = mysqli_query($conn,"SELECT * FROM userdetails");
   	//echo "$result";
?>
		<table border='1'>
			<tr>
				<th>Name</th>
				<th>Email</th>
				<th>Phone</th>
			</tr>
	<?php while($row = mysqli_fetch_array($result))
	{ ?>
		<tr>
		<td> <?php echo $row['name'];?></td>
		<td> <?php echo $row['email'];?></td>
		<td> <?php echo $row['phone'];?></td>
		<td>
			<a href="displayEditUser.php?email=<?php echo $row['email'];?>" id="<?php echo $row['email'];?>"><input type='submit' value="Edit" ></a>
			<a href="script/deleteUser.php?email=<?php echo $row['email'];?>" id="<?php echo $row['email'];?>"><input type='submit' value="Delete" ></a>
		</tr>

	<?php }?>
</table>
