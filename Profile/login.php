<?php
include '../include/connect.php';
if(isset($_POST['submit'])){
    $e=$_POST['email'];
    $_SESSION['email']=$e;
    $p=$_POST['pass'];
    $sq="select * from signup where email='$e' and pass='$p'";
    $q=mysqli_query($con, $sq);
    
    
    
    if(mysqli_num_rows($q)>0)
        {
        
        $f=mysqli_fetch_assoc($q);
        if($f!=0)
        {
        header('location:profile-page.php');
        echo 'login';
        }
        else 
        {
            echo $f['name'];
        }
        $_SESSION['id']=$f['id'];
        
        /*if ($f['status']==0)
	  {
	  
 
   echo"<script type='text/javascript'>alert('Account is Block due to voilation of Terms & conditions')</script>";

   }
   else{
      header('location:profile-page.php');
   }*/
         
         
       // $_SESSION['email']=$f['email'];
        //{
               // header('location:profile-page.php');
           // }
            
    }
 //else {
     //echo"<script type='text/javascript'>alert('Doesnt Exist Account')</script>";
   
    //}
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
                            <li><a href="signup.php"><i class="material-icons">person_add</i>&nbsp;&nbsp; Sign Up</a></li>
                            
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
					<div class="col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
						<div class="card card-signup">
							<form class="form" method="POST" action="">
								<div class="header header-primary text-center">
									<h4>Sign In</h4>
									<div class="social-line">
                                                                            <a href="signup.php" style="color:#6cedff"><h4>Not having Account</h4></a>
									</div>
                                                                </div>
								<div class="content">

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">email</i>
										</span>
                                                                            <input type="email" class="form-control" placeholder="Enter Your Email"  name="email" required>
									</div>

									<div class="input-group">
										<span class="input-group-addon">
											<i class="material-icons">lock_outline</i>
										</span>
                                                                            <input type="password" placeholder="Enter Your Password" name="pass" class="form-control" required />
									</div>
                                                                        <div class="text-center hide">
                                                                            <a href="signup.php" style="color:#f00"><h6 style="font-size: 12px;">Forgot Password</h6></a>
                                                                        </div>
                                                                    
                                                                        <div class="col-sm-12 text-center">
                                                                            <input type="submit" class="btn btn-simple btn-primary btn-lg" value="Sign in" name="submit">
                                                                            <br>
                                                                        </div>
                                                                </div>
							</form>
						</div>
					</div>
				</div>
			</div>

        <footer class="footer">
	        <div class="container">
	            <nav class="pull-left hide">
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

</html>
