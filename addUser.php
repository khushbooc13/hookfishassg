<?php
   include("script/session.php"); //check session is open or close
?>
<html>
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
<body>
<a href="displayUser.php"><input type="submit" id="submit" value="View User Details"></a>
<a href="logout.php"><input type="submit" id="submit" value="Logout"></a>

<form action="script/addUser.php" method="post">
<h1 align="center" style="margin-top: 5%">Enter User Details</h1>
<table align="center" style="margin-top:5%">
<tr>
<td>Name :</td>
<td><input type="text" name="name" id="name"required></td>
</tr>
<tr>
<td>Email id: </td>
<td><input type="text" name="email" id="email"required></td>
</tr>
<tr>
<tr>
<td>Phone Number: </td>
<td><input type="tel" name="phone" id="phone"></td>
</tr>
<tr>
<td><input type="submit" id="submit" value="Submit">
</td>
</tr>
</table>
</form>