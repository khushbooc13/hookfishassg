<?php
   session_start();
   
   if(session_destroy()) {
      header("Location: ../HookFish/login.html");
   }
?>