<?php
include '../../include/connect.php';
//query to block

$sql="UPDATE signup SET status = '0' WHERE id = $_REQUEST[id]";
mysqli_query($con,$sql);
header('location:useraccess.php');
?>
