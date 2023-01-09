<?php

// parameters to connect to database : serverName, username, password, databaseName
$con = new mysqli("localhost", "root","", "crudoperation");

if(!$con){
  die(mysqli_error($con));
  // echo "connection good";
}




?>