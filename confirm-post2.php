<?php

//connect the database server
require("db_connection.php");

// connecting the code library
require("code_lib.inc.php");

  $product_id = $_REQUEST['product_id'];
  $confirmation = $_REQUEST['confirmation'];

  //building a dynamic SQL command
  $sql  = "update product set ";
  $sql .= "confirmation='$confirmation' where product_id='$product_id'";

  echo $sql;

  //execute the sql command
  $x = $mysqli->multi_query($sql);

  if($x>0){

      echo "record successfully updated";
    // header("location:add-product-3.php?status=pass");
  }
  else{
    echo "updating record failed";
    // header("location:add-product-3.php?status=fail");
  }

 ?>
