<?php
ob_start();
//start the session
session_start();
session_destroy();

//connect the database server
require("db_connection.php");

$id3 = $_GET['d'];

$sql = "DELETE FROM admin WHERE admin.admin_id='$id3'";

$x = $mysqli->query($sql);

if($x > 0){
    header("location:admin-login.php?status=pass");
}
else{
    $_SESSION['status'] = "Failed";
    header("location:admin.php?status-fail");
    ob_end_flush();
}

?>