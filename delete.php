<?php
// to connect to database
  include "connect.php";
  if(isset($_GET['deleteid'])){
    // to get the id value from the url / params
    $id = $_GET['deleteid'];

    $sql = "delete from `crud` where id=$id";
    $result = mysqli_query($con, $sql);
    if($result){

      // to redirect to display page after deleteing a  user
     header("Location:display.php");


    }else {
      die(mysqli_error($con));
    }
  }

?>