<?php
ob_start();
//start the session
session_start();
session_destroy();

//connect the database server
require("db_connection.php");

$id2 = $_GET['c'];

$sql = "DELETE FROM user WHERE user.user_id='$id2'";

$x = $mysqli->query($sql);

if($x > 0){
    header("location:index.php?status=pass");
}
else{
    $_SESSION['status'] = "Failed";
    header("location:user-account.php?status-fail");
    ob_end_flush();
}

?>