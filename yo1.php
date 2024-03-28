<?php
    $server="localhost";
    $username="root";
    $password="";

    $con=mysqli_connect($server,$username,$password);

    if(!$con){
        die("lost".mysqli_connect_error());
    }
    else{
        echo"success";
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=<device-width>, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="gdsc.css">
</head>
<body>
    <div class="navbar">
        <h1 class="he">THIS IS YOUR INFO FORM</h1>
        <p class="he">fill all details carefully</p>
      <form action="yo1.php" method="post">  
        <input type="text" name="name" id="name" placeholder="ENTER YOUR NAME">
        <input type="text" name="phoneno" id="phoneno" placeholder="ENTER YOUR PHONE NO">
        <input type="text" name="age" id="age" placeholder="ENTER YOUR AGE">
        <input type="text" name="course" id="course" placeholder="ENTER YOUR course">
        <textarea name="input" id="input" placeholder="give input"></textarea>
        <button class="btn">SUMBIT</button>
      </form>
    <div class="fetchinfo">
       <p class="q">YOURE INFO IS FETCH HERE</p>
       <?php
          $sql ="SELECT * FROM `know`";
          $result=mysqli_query($con,$sql);
         
         while($row=mysqli_fetch_assoc($result)){
           echo  $row['srno']." name= ".$row['name']." phoneno= ".$row['phoneno']." age= ".$row['age']." course= ".$row['course']." input= ".$row['input']." date= ".$row['dt'];
           echo "<br>";
         }
         
  
      ?>
    </div>
</body>
</html>
