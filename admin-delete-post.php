<?php

//start the session
session_start();

//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");

  $id = $_GET['a'];

  $sql = "delete from product where product_id='$id'";

  //execute the sql command
  $x = $mysqli->multi_query($sql);

  if($x > 0){

    // echo "Deleted Successfully!!";
    $_SESSION['status'] = "Product deleted successfully!!";
    header("location:confirm-post.php?status=pass");

    
  }
  else{
    // echo "Failed!!";
    $_SESSION['status'] = "Failed to delete product";
    header("location:confirm-post.php?status=fail");
  }

 ?>
