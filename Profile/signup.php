<?php
include'../include/connect.php';
if(isset($_POST['submit'])){
    $about=$_POST['about'];
        $st=$_POST['st'];
	$name=$_POST['fullname'];
        $pass=$_POST['pass'];
        $confpass=$_POST['confpass'];
        $email=$_POST['email'];
        $gender=$_POST['gender'];
        $designation=$_POST['designation'];
        $dob=$_POST['dob'];
        //profile upload start
        $target_dir = "../profile_pic/";
        $target_file = $target_dir .$_FILES["profile"]["name"];
        $uploadOk = 1;
        $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
        //profile extension check
        if($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif" ) {
        echo"<script> alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.')</script>";
        $uploadOk = 0;
        }
        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo"<script type='text/javascript'>alert('Sorry, your file was not uploaded.)</script>";
        // if everything is ok, try to upload file
        } else {
            //move file to db and dir
            if (move_uploaded_file($_FILES["profile"]["tmp_name"], $target_file.$_FILES['profile']['name'])) {
                $profile=$_FILES["profile"]["name"];
                //insert into DB
                $sq="insert into signup(name,email,pass,cpass,gender,designation,dob,profile,abouts,status)values('$name','$email','$pass','$confpass','$gender','$designation','$dob','$profile','$about','$st')";
                $result=mysqli_query($con, $sq);
                echo"<script type='text/javascript'>alert('Registerd Successfully')</script>";
                header('location:login.php');
                //echo "The file ". basename( $_FILES["profile"]["name"]). " has been uploaded.";
            } else {
                echo"<script type='text/javascript'>alert('Registeration Failed')</script>";
            }
        }
               
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Sign Up - Fluxsion</title>
    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />
    <!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>
</head>

<body class="signup-page">
	<nav class="navbar navbar-transparent navbar-absolute">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
                    <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo1.png" style="margin-top: -15px;"></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
						<a href="../user_dash/page/upload.php" >
							<i class="material-icons">cloud_upload</i>Upload New Video
						</a>
    				</li>
                    <li>
                            <a href="#" class="dropdown-toggle" data-toggle="dropdown">
                               <i class="material-icons">people</i>
                                User
                                <b class="caret"></b>
                            </a>
                            <ul class="dropdown-menu">
                                <li><a href="signup.php"><i class="material-icons">person_add</i>&nbsp;&nbsp; Sign Up</a></li>
                                <li><a href="login.php"><i class="material-icons">person_outline</i>&nbsp;&nbsp;Sign In</a></li>
                            </ul>
                    </li>
		            <li>
		                <a href="https://twitter.com/Phantom_cluster" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-twitter" style="color:white;"></i>
						</a>
		            </li>
		            <li>
		                <a href="https://www.facebook.com/insider7enjoy" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-facebook-square" style="color:white;"></i>
						</a>
		            </li>
					<li>
		                <a href="https://www.instagram.com/not_phantom.cluster" target="_blank" class="btn btn-simple btn-white btn-just-icon">
							<i class="fa fa-instagram" style="color:white;"></i>
						</a>
		            </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/art.jpg'); background-size: cover; background-position: top center;">
			<div class="container">
				<div class="row">
                                    <!--only execute when successfully sign up
                                    if ($result) {
                                        <div class="alert alert-success">
                                            <div class="container-fluid">
                                                  <div class="alert-icon">
                                                        <i class="material-icons">check</i>
                                                  </div>
                                                  <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                                        <span aria-hidden="true"><i class="material-icons">clear</i></span>
                                                  </button>
                                              <b>Success Alert:</b> Yo! You've Signed Up Successfully.
                                            </div>
                                        </div>
                                        }
                                        <!--only execute when successfully sign up end--->
				<!-- form design begin-->
					<div class="col-md-10 col-md-offset-1 col-sm-8 col-sm-offset-2">
						<div class="card card-signup">
							<div class="form">
								<div class="header header-primary text-center">
									<h4>Sign Up</h4>
									<div class="social-line">
										<a href="login.php" style="color:#fff;"><h4>Already Have an Account</h4></a>
									</div>
                                </div>
                                <!--form begin-->
                                <form id="identicalForm" class="content" method="post" name="f1" onsubmit="return matchpass()" action="" enctype="multipart/form-data">
                                    
                                    <input type="hidden" name="st" value="1">
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                        <i class="material-icons">face</i>
                                                </span>
                                            <input type="text" class="form-control" pattern="[a-zA-Z]+[a-zA-Z]" placeholder="Full Name..." name="fullname" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                                                <div class="input-group">
                                                                        <span class="input-group-addon">
                                                                                <i class="material-icons">email</i>
                                                                        </span>
                                                                    <input type="email" class="form-control" placeholder="Email..." name="email" required>
                                                                </div>
                                    </div>
                                    <div class="col-sm-6">
									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                                                            <input type="password" placeholder="Password..." name="pass" class="form-control" required/>
									</div>
                                    </div>
                                    <div class="col-sm-6">
                                    <div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                        <input type="password" placeholder="Confirm Password..." name="confpass" onblur="checkpass()" class="form-control" required/>
									</div>
                                    </div>
                                    <div id="gender">
									<div class="radio" style="margin-left:.8em;">
										<label style="color:#000;">Gender:</label>
										<label>
                                                                                    <input type="radio" name="gender" value="male" required >
											Male
                                            
										</label>
                                        <label>
                                            <input type="radio" name="gender" value="female" required>
											Female
                                        </label>
									</div>
                                    </div>
                                    <!-- markup -->
                                    <div class="col-sm-6">
                                    <div class="form-group label-floating">
                                            <label class="control-label">Your are: Developer / Designer / Other </label>
                                            <input type="text" class="form-control" name="designation" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-3">
                                        <input class="datepicker form-control" type="text" value="Enter Date of Birth" id="#datepicker" name="dob" required/>
                                    </div>
                                    <div class="col-sm-3">
                                        <label>Upload Your Profile</label>
                                        <input type="file" class="" value="Upload Profile" name="profile" required/>
                                    </div>
                                    <br>
                                    <div class="col-sm-8 hide">
                                    <h4 style="margin-left:.8em;margin-top:-.7em;">Recommended Channels</h4>
                                    <div class="checkbox" style="margin-left:.8em;">
										<label>
											<input type="checkbox" name="cat" >
											Art                                            
										</label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Tech
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Fashion
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Science
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											DIY
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Fun
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Adventures
                                        </label>
                                        <label>
                                            <input type="checkbox" name="cat" >
											Music
                                        </label>
									</div>
                                    </div>
                                    <div class="col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">About Yourself</label>
                                            <textarea class="form-control" rows="4" name="about" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
									<input type="submit" class="btn btn-simple btn-primary btn-lg" value="Sign Up" name="submit">
									<br>
								    </div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>

        <footer class="footer">
	        <div class="container">
	            <nav class="pull-left">
	                    <ul>
							<li>
								<a href="#">
									About
								</a>
							</li>
							<li>
								<a href="#">
									Contact
								</a>
							</li>
							<li>
								<a href="#">
									Terms & Condition
								</a>
							</li>
						</ul>
	            </nav>
	            <div class="copyright pull-right">
	               Made with <i class="fa fa-heart heart" style="color:#f00000;"></i> &copy; <a href="http://fb.com/insider7enjoy" target="_blank" style="color:#d6d6d6;">Phantom.Cluster</a> <script>document.write(new Date().getFullYear())</script>
	            </div>
	        </div>
	    </footer>

		</div>

    </div>


</body>
	<!--   Core JS Files   -->
	<script src="../assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js"></script>

	<!--  Plugin for the Sliders, full documentation here: http://refreshless.com/nouislider/ -->
	<script src="../assets/js/nouislider.min.js" type="text/javascript"></script>

	<!--  Plugin for the Datepicker, full documentation here: http://www.eyecon.ro/bootstrap-datepicker/ -->
	<script src="../assets/js/bootstrap-datepicker.js" type="text/javascript"></script>

	<!-- Control Center for Material Kit: activating the ripples, parallax effects, scripts from the example pages etc -->
	<script src="../assets/js/material-kit.js" type="text/javascript"></script>
	  <script>
      $( function() {
        $( "#datepicker" ).datepicker();
      } );
      </script>
      <script>
          function matchpass(){
              var firstpassword=document.f1.pass.value;
              var secondpassword=document.f1.confpass.value;
              
              if(firstpassword==secondpassword)
              {
                  return true;
              }
              
              else
              {
                  alert("password must be same");
                  return false;
              }
          }
      </script>
      
      
</html>
