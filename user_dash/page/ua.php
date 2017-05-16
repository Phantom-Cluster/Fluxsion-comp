<?php
include '../../include/connect.php';
//query to activate
$sql="UPDATE signup SET status = '1' WHERE id = $_REQUEST[id]";
mysqli_query($con,$sql);
header('location:useraccess.php');
?>

