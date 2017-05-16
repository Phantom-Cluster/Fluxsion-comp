<?php
include '../../Include/connect.php';
$del_vid= "delete from upload_video where id='$_REQUEST[id]'";
mysqli_query($con, $del_vid);
header('location:uploaded.php');
?>

