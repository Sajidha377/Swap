<?php
  //database connection
  $server   = "localhost";
  $username = "root";
  $password = "";
  $db_name  = "db_swap";
  $port = "3310";

  $mysqli = new mysqli($server,$username,$password,$db_name,$port);

  if($mysqli->connect_error){
    echo $mysqli->errorno . "<br />";
    echo $mysqli->error . "<br />";
    die("connection failed");
  }
   //echo "connection successful";

 ?>
