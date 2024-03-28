<?php
   if(isset($_POST['name'])){
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("lost".mysqli_connect_error());
    }

    $name=$_POST['name'];
    $surname=$_POST['surname'];
    $email=$_POST['email'];
    $password=$_POST['password'];

    $sql="INSERT INTO `suii`.`public` ( `name`,`surname`,`email`,`password`) VALUES ('$name', '$surname', '$email', '$password')";
    // echo $sql;
    if($con->query($sql)==true){
        //echo"sucess";
        $insert=true;
    }
    else{
        echo"error:$sql <br> $con->error";

    }
    $con->close();

  }


?>

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="registerationcss.css">
  <title>Registration Page</title>
</head>
<body>
  <div class="registration-container">
    <h2>Registration</h2>
    <form action="register1.php" method="post">
      <label for="name">Name: </label>
      <input type="text" id="name" name="name" required>
      <span id="nameError" class="error"></span><br><br>

      <label for="surname">Surname:</label>
      <input type="text" id="surname" name="surname" required>
      <span id="nameError" class="error"></span><br><br>

      <label for="email">Email ID:</label>
      <input type="email" id="email" name="email" placeholder="example@college.com" required>
      <span id="nameError" class="error"></span><br><br>

      <label for="password">Password:</label>
      <input type="pass" id="pass" name="password" required>
      <span id="passwordError" class="error"></span><br><br>

      <button type="submit">Register</button>
      <p>Already registered? <a href="login.php">Login here</a></p>
    
    </form>
  </div>
  <script>
    document.getElementById("registrationForm").addEventListener("submit", function(event) {
      event.preventDefault(); // Prevent default form submission
      
      // Here you can perform any necessary login validation or submission
      // For demonstration, let's just display a message
      alert("Login details saved successfully!");
    });
  </script>
</body>
</html>