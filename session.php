<?php
   include('script/config.php'); //connect to database using confif.php file
   session_start();
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($conn,"select email from login where email = '$user_check' ");  //check if user is present
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['email'];
   
   if(!isset($_SESSION['login_user'])){ // if user is not loggedin redirect to login page
      header('Location: ../Hookfish/login.html');
   }
?>