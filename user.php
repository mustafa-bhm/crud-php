<?php
// to connect to databse
include "connect.php";
if(isset($_POST["submit"])){
  $name = $_POST["name "];
  $email =$_POST["email"];
  $mobile =$_POST["mobile"];
  $password = $_POST["password"];
  // to create insert query
  $sql = "insert into `crud` (name, email, mobile, password) values('$name', '$email', '$mobile', '$password' )";

  // to execute the query
  $result = mysqli_query($con, $sql);
  if($result){
    echo "Data inserted successfuly";
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
    <input type="text" class="form-control" name= "name" autocomplete= "off" placeholder="Enter your name">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">email</label>
    <input type="email" class="form-control" name= "email" autocomplete= "off" placeholder="Enter your email">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">mobile</label>
    <input type="text" class="form-control" name= "mobile" autocomplete= "off" placeholder="Enter your mobile">

  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Password</label>
    <input type="text" class="form-control" name= "password" autocomplete= "off" placeholder="Enter your password">

  </div>

  <button type="submit" name="submit" class="btn btn-primary">Submit</button>
</form>
</div>


  </body>
</html>