<?php
  $servername="localhost";
  $username="root";
  $password="";
  $db="waywe_db";

  //create connection
  $con=new mysqli($servername,$username,$password,$db);

  //check connection
  if($con->connect_error){
      die("Connection failed: ".$conn->connect_error);
  }
 
?>

