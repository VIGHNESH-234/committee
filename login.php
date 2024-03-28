<?php
// if($_SERVER["REQUEST_METHOD"]=="POST"){
//   $server="localhost";
//   $username="root";
//   $password="";

//   $con=mysqli_connect($server,$username,$password);

//   if(!$con){
//       die("lost".mysqli_connect_error());
//   }
//   else {
//       echo"connected";
//   }
//  include'connect.php';
//  $email=$_POST["email"];
//  $password=$_POST["password"];

//   $sql="SELECT * FROM `suii`.`public` where email='$email' AND password='$password'";
//   $result=mysqli_query($con,$sql);
//   session_start();
//   $_SESSION["loggedin"]=true;
// $_SESSION["location:homepage.php"];
// $header("location:homepage.php");
  
// else{
//   $showError="invalid ";
// }
if(isset($_POST["email"])){
  $server="localhost";
  $username="root";
  $password="";
  $database="suii";

  $con=mysqli_connect($server,$username,$password,$database);

  if(!$con){
      die("lost".mysqli_connect_error());
  }

  $email=$_POST['email'];
  $password=$_POST['password'];
  $sql="SELECT email, password FROM public WHERE email = '$email'";
  $result=mysqli_query($con,$sql);
  if($num=mysqli_num_rows($result)>0){
    $login=true;
  }
  session_start();
  $_SESSION['loggedin']=true;
  $_SESSION["location:1.php"];
  header("location:1.php");
}


?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
  <link rel="stylesheet" href="login.css">
</head>
<body>
  <div class="registration-container">
    <h2>Login</h2>
    <form  method="post">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" placeholder="Enter your email" required>
      <span class="error" id="emailError"></span><br>

      <label for="pass">Password:</label>
      <input type="password" id="pass" name="password" placeholder="Enter your password" required>
      <span class="error" id="passwordError"></span><br>
   <button class>Submit</button> 
      <p>Don't have an account? <a href="register1.php">Register here</a></p>
    </form>
  </div>
  
  
 </body>
</html>



