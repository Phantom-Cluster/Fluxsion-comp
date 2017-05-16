<?php
include '../../Include/connect.php';
if(isset($_POST['artist_n']))
{
    
$artist= $_POST['artist'];
$details= $_POST['adetails'];
    //artist photo
    move_uploaded_file($_FILES['apic']['tmp_name'], "../../artist/pic/".$_FILES['apic']['name']);
    $artist_pic=$_FILES['apic']['name'];
    //song work
    move_uploaded_file($_FILES['acvr']['tmp_name'], "../../artist/cvr/".$_FILES['acvr']['name']);
    $artist_cvr=$_FILES['acvr']['name'];
$sq="insert into artist(artist,artistcvr,artistpic,details)value('$artist','$artist_cvr','$artist_pic','$details')";
$upload=mysqli_query($con, $sq);
if  ($upload)
        {
         echo"<script type='text/javascript'>alert('Artist List Updated Successfully')</script>";
        }
    else 
        {
            echo"<script type='text/javascript'>alert('Artist List updation gone Wrong')</script>";
        }
header('location:audio_upload.php');
}
 
?>