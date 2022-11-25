<?php

session_start();

//connecting the database server
require("db_connection.php");

require("code_lib.inc.php");

//to get the values from add-product1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//storing the form field values into variables
$product_name = $_REQUEST['product_name'];
//$condition = $_REQUEST['condition'];
$description = $_REQUEST['description'];
$user_id=$_SESSION["user_id"];

//building a dynamic SQL command
  $sql  = "select user_id from user where user_id='$_SESSION["user_id"]'";

//test display the SQL commands
//echo $sql;

//executing the SQL command
  $x = $mysqli->query($sql);

  if($x>0){

    $_SESSION['status'] = "record added successfully";
    header("location:add-product1.php") ;
  }
  else{
    $_SESSION['status'] = "record adding failed";
    header("location:add-product1.php") ;
  }
   


 ?>