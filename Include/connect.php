<?php
session_start();
$con=mysqli_connect("localhost","root","","test");
        if(!$con)
        {
            echo 'Database Connection Failed,Please Check Listed Credentials';
        }
?>