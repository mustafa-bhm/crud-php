<?php
// to connect to databse
include "connect.php";
// to get the id from the url/params
$id=$_GET['updateid'];
// query data for the user to update and store into variables
$sql2= "select * from `crud` where id = $id";
$result2= mysqli_query($con, $sql2);
$row = mysqli_fetch_assoc($result2);
$name = $row["name"];
$email = $row["email"];
$mobile = $row["mobile"];
$password = $row["password"];

// to handel submit request after updating user's data
if(isset($_POST["submit"])){
  $name = $_POST["name"];
  $email =$_POST["email"];
  $mobile =$_POST["mobile"];
  $password = $_POST["password"];
  // to create update query
   $sql="update `crud` set id=$id,name='$name',email='$email',mobile='$mobile',password='$password' where id=$id";

  // to execute the query
  $result = mysqli_query($con, $sql);
  if($result){

    // to redirect to display page after updating user's data
    header('Location: display.php');


  }else {
    die(mysqli_error($con));
  }
}


?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" >

    <title>Crud operation</title>
  </head>
  <body>
<div class="container my-5">
<form method=post>
  <div class="form-group">
    <label for="exampleInputEmail1">Name</label>
    <input type="text" class="form-control" name= "name" autocomplete= "off" placeholder="Enter your name" value=<?php echo $name ?>>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" name= "email" autocomplete= "off" placeholder="Enter your email" value=<?php echo $email ?>>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">mobile</label>
    <input type="text" class="form-control" name= "mobile" autocomplete= "off" placeholder="Enter your mobile" value=<?php echo $mobile ?>>

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="password" class="form-control" name= "password" autocomplete= "off" placeholder="Enter your password" value=<?php echo $password ?>>

  </div>

  <button type="submit" name="submit" class="btn btn-primary">Update</button>
</form>
</div>


  </body>
</html>