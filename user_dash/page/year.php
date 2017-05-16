<?php
include '../../Include/connect.php';
if(isset($_POST['year_n']))
{
$year= $_POST['year'];
$sq="insert into year(year)value('$year')";
$upload=mysqli_query($con, $sq);
if  ($upload)
        {
         echo"<script type='text/javascript'>alert('Year List Updated Successfully')</script>";
        }
    else 
        {
        }
header('location:audio_upload.php');
}
 
?>