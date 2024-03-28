<?php
include'connect.php';
if(isset($_GET['deletesrno'])){
    $srno=$_GET['deletesrno'];
    $sql="delete from `register`.`table` where srno=$srno";
    $result=mysqli_query($con,$sql);
    if($result){
        echo"whhooo";
    }
    else{
        echo"why";
    }

}



?>