<?php
include'connect.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.rtl.min.css" >
  <title>Document</title>
</head>
<body>
  <div class="container">
  <button class="btn btn-primary mp-5" ><a href="register.php" class="text-light">previous</a></button>
  <table class="table">
  <thead>
    <tr>
      <th scope="col">srno</th>
      <th scope="col">name</th>
      <th scope="col">surname</th>
      <th scope="col">email</th>
      <th scope="col">password</th>
      <th scope="col">date and time</th>
      <th scope="col">operations</th>
    </tr>
  </thead>
  <?php
  $sql="SELECT * FROM `register`.`table`";
  $result=mysqli_query($con,$sql);
  if (!$result) {
    die("Query failed: " . mysqli_error($con));
  }
if(mysqli_num_rows($result)>0){
  while($row=mysqli_fetch_assoc($result)){
    $srno=$row['srno'];
    $name=$row['name'];
    $surname=$row['surname'];
    $email=$row['email'];
    $password=$row['password'];
    $dt=$row['dt'];
    echo'
  <tr>
    <th scope="row">'.$srno.'</th>
    <td>'.$name.'</td>
    <td>'.$surname.'</td>
    <td>'.$email.'</td>
    <td>'.$password.'</td>
    <td>'.$dt.'</td>
    <td><button class="btn btn-primary mp-5"><a href="update.php? updatesrno='.$srno.'" class="text-light">update</a></button>
     <button class="btn btn-danger mp-5"><a href="delete.php? deletesrno='.$srno.'" class="text-light">delete</a></button>
    </td>
  </tr>
    ';
  }
}
else{
  echo"no record";
}
mysqli_close($con);

  ?>
  <!-- <tbody>
    <tr>
      <th scope="row">1</th>
      <td>Mark</td>
      <td>Otto</td>
      <td>@mdo</td>
    </tr>
    <tr>
      <th scope="row">2</th>
      <td><button class="btn btn-primary mp-5"><a href="#">update</a></button>
        <button class="btn btn-danger mp-5"><a href="#">update</a></button>
      </td>
      <td>Thornton</td>
      <td>@fat</td>
    </tr>
    <tr>
      <th scope="row">3</th>
      <td colspan="2">Larry the Bird</td>
      <td>@twitter</td>
    </tr>
  </tbody>
</table> -->

</div>
</body>
</html>
