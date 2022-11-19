<?php
   session_start();
  session_unset();
  session_destroy();
  header("location: login.php");
  exit ;
 /* echo"logging you out . please wait .... ";
  session_destroy();
  header('location:index.php');*/
?>