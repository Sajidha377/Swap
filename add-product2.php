<?php 
//validate user
require("validate-user.php");

//connecting the database server
require("db_connection.php");

//to get the values from add-product-1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

$product_name=$_REQUEST['product_name'];
$condition=$_REQUEST['condition'];

$sql  = "INSERT into product (product_name,condition) values(";
$sql .="'product_name',";
$sql .="'condition')";

echo $sql;

//executing the SQL command
$x = $mysqli->query($sql);

if($x>0){
    echo "record successfully added";
}else{
    echo "failed";
}

?>