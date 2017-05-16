<?php
include '../../Include/connect.php';
$del_cat= "delete  from vid_dropdown where id='$_REQUEST[id]'";
mysqli_query($con, $del_cat);
header('location:vadmin.php');
?>