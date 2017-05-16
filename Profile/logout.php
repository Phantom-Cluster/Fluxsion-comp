<?php
session_start();
//unset all value
session_unset();
//destroy all values 
session_unset();
header('location:login.php');

?>