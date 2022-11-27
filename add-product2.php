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
  $category = $_REQUEST['category'];

//building a dynamic SQL command
  $sql  = "insert into product (product_name,description,category) values(";
  $sql .= "'$product_name',";
  //$sql .= "'$condition',";
  $sql .= "'$description',";
  $sql .= "'$category')";

//test display the SQL commands
//echo $sql;

//executing the SQL command
  $x = $mysqli->query($sql);

  if($x>0){
    //echo "record successfully added";
  
    //uploading files
    if($_FILES['picture']['error'] == 0 && $_FILES['picture']['type']=="image/jpeg"){
  
      $last_id     = $mysqli->insert_id;
      $filename    = $_FILES['picture']['tmp_name'];
      $destination = $last_id . "_".rand().rand().rand().".jpg";
  
      $y = move_uploaded_file($filename,"images/large/".$destination);
  
      if($y>0){
        //uploading the images to the products table in database
        $sql2 = "update product set picture='$destination' where product_id=$last_id";
  
        //executing the SQL commands
        $z = $mysqli->query($sql2);
  
        //copying the images to thumb folder and resizing it
        copy("images/large/".$destination, "images/thumb/".$destination);
  
        //resizing the images
        resizeThumbPicture("images/thumb/",$destination);
  
      }
  
    }
  
    $_SESSION['status'] = "record added successfully";
    header("location:add-product1.php") ;
  }
  else{
    $_SESSION['status'] = "record adding failed";
    header("location:add-product1.php") ;
  }
   


 ?>