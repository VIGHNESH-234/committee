<?php
  $server="localhost";
  $username="root";
  $password="";
  $database="register";

  $con=mysqli_connect($server,$username,$password,$database);

  if(!$con){
      die("lost".mysqli_connect_error());
  }
  else {
      echo"connected";
  }
?>