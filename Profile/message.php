<?php
include'../include/connect.php';
if(isset($_POST['submit'])){
	
       $sq="insert into msg()values()";
       $result=mysqli_query($con, $sq);
       
      if  ($result){echo"<script type='text/javascript'>alert('Message Sent to Admin')</script>";
      }
       
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Query Page- Fluxsion</title>
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
		<div class="header header-filter" style="background-image: url('../assets/img/city.jpg'); background-size: cover; background-position: top center;">
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
									<h4>Submit Your Feedback or Query</h4>
									<div class="hide social-line">
										<a href="login.php" style="color:whitesmoke;"><h6>Already Have an Account</h6></a>
                                                                                <a href="signup.php" style="color:buttonface;"><h6>Not Having an Account</h6></a>
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
                                            <input type="text" class="form-control"  placeholder="Full Name..." name="name" required>
                                        </div>
                                    </div>
                                    <div class="col-sm-6">
                                        <div class="input-group">
                                                <span class="input-group-addon">
                                                        <i class="material-icons">email</i>
                                                </span>
                                            <input type="email" class="form-control" pattern="[/^([a-zA-Z0-9_.+-])+\@(([a-zA-Z0-9-])+\.)+([a-zA-Z0-9]{2,4})+$/]" placeholder="Email" name="email" required>
                                        </div>
                                    </div>
                                    
                                    <!-- markup -->
                                    <div class="col-sm-12">
                                        <div class="form-group label-floating">
                                            <label class="control-label">Your Query</label>
                                            <textarea class="form-control" rows="4" name="query" required></textarea>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 text-center">
                                        <input type="submit" class="btn btn-simple btn-primary btn-lg" value="Send Query" name="submit"><br>
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
	  
      
      
      
</html>
