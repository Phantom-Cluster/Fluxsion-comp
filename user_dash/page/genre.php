<?php
include '../../Include/connect.php';
if(isset($_POST['genre_n']))
{
$genre= $_POST['genre'];
$sq="insert into genre(genre)value('$genre')";
$upload=mysqli_query($con, $sq);
if  ($upload)
        {
         echo"<script type='text/javascript'>alert('Genre List Updated Successfully')</script>";
        }
    else 
        {
            echo"<script type='text/javascript'>alert('Genre List updation gone Wrong')</script>";
        }
header('location:audio_upload.php');
}
 
?>