<?php 

//connecting the database server
require("db_connection.php");

//to get the values from add-product-1.php page form and display
echo "<pre>";
print_r($_REQUEST);
echo "</pre>";

//storing the form field values into variables
$condition = $_REQUEST['condition'];

$sql  = "INSERT into test (condition) values(";
$sql .= "'$condition')";

//executing the SQL command
$x = $mysqli->query($sql);

if($x>0){
    echo "record successfully added";
}
else{
    echo "adding record failed";
}

?>