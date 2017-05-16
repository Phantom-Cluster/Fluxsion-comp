<?php
include'../include/connect.php';
if(isset($_POST['submit'])){
	$name= ucwords($_POST['fullname']);
        $pass=$_POST['pass'];
        $confpass=$_POST['confpass'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $designation= ucwords($_POST['designation']);
        $dob=$_POST['dob'];
        $about= ucwords($_POST['about']);
       $sq="insert into signup(name,email,pass,cpass,gender,designation,dob,abouts)values('$name','$email','$pass','$confpass','$gender','$designation','$dob','$about')";
       $result=mysqli_query($con, $sq);
       
      if  ($result){echo"<script type='text/javascript'>alert('Registerd Successfully')</script>";
      }
}
?>