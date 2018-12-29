<style>
input[type=text], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=email], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=password], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}
input[type=tel], select {
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    display: inline-block;
    border: 1px solid #ccc;
    border-radius: 4px;
    box-sizing: border-box;
}

input[type=submit] {
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
</style>
<?php require_once('script/editUser.php')?>
<form action="" method="POST">
<h1 align="center" style="margin-top: 5%">Edit User Details</h1>
<table align="center" style="margin-top:5%">
<tr>
<td>Name :</td>
<td><input type="text" name="name" id="name" value="<?php echo htmlentities($name); ?>"></td>
</tr>
<tr>
<td>Email id: </td>
<td><input type="text" name="email" id="email" value="<?php echo htmlentities($email); ?>" readonly="readonly"></td>
</tr>
<tr>
<tr>
<td>Phone Number: </td>
<td><input type="tel" name="phone" id="phone" value="<?php echo htmlentities($phone); ?>"></td>
</tr>
<tr>
<td><a href="script/editUser.php"><input type="submit" id="submit" value="Update"></a>
</td>
</tr>
</table>
</form>