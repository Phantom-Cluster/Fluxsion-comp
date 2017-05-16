<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Fluxsion~One Page for Streaming</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <style>
        @media only screen and (min-height: 150px) {
            .logo-card {
                /*background-color: purple;*/
                margin-top:-10em;
            }
        }
        @media only screen and (min-height: 200px) {
            .logo-card {
                /*background-color: purple;*/
                margin-top:-20em;
            }
        }
        
         @media only screen and (min-height: 320px) {
            .logo-card {
                /*background-color: lightseagreen;*/
                margin-top:-25em;
            }
        }
        @media only screen and (min-height: 480px) {
            .logo-card {
               /*background-color: lightgreen;*/
                margin-top:-30em;
            }
        }
        @media only screen and (min-height: 600px) {
            .logo-card {
                /*background-color: green;*/
                margin-top:-32em;
            }
        }
        @media only screen and (min-height: 700px) {
            .logo-card {
                /*background-color: lawngreen;*/
                margin-top:-36em;
            }
        }
        @media only screen and (min-height: 830px) {
            .logo-card {
                /*background-color: blueviolet;*/
                margin-top:-38em;
            }
        }
        @media only screen and (min-height: 900px) {
            .logo-card {
                /*background-color: grey;*/
                margin-top:-42em;
            }
        }
        
        @media only screen and (min-height: 1500px) {
            .logo-card {
                /*background-color: greenyellow;*/
                margin-top:-57em;
            }
        }
        @media only screen and (min-height: 2000px) {
            .logo-card {
                /*background-color: greenyellow;*/
                margin-top:-67em;
            }
        }
        
        .main
        {
            transition: all .8s ease-in-out ; 
           
            
        }.btn-success
        {
            transition:  all .2s cubic-bezier(.25,.8,.25,1);
        }
        
        .fa-heart
        {
            animation: beat .8s infinite alternate; 
            transform: scale(0.5);
        }
        @keyframes beat{
	to { transform: scale(1); }
        }
        .slideInUp
        {
            animation-duration: 1s;
            animation-delay: .5s;
        }
    .particle-css
    {
        transition:  all .8s ease-in-out;
    }
    </style>
</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-fixed-top navbar-color-on-scroll">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="#"><img src="assets/img/logo1.png" style="margin-top: -15px;"></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
    					<a href="#feature">
    						<i class="material-icons">subject</i>feature
    					</a>
    				</li>
    				<li id="myModal">
						<a href="user_dash/page/upload.php" >
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
                                <li><a href="Profile/signup.php"><i class="material-icons">person_add</i>&nbsp;&nbsp; Sign Up</a></li>
                                <li><a href="Profile/login.php"><i class="material-icons">person_outline</i>&nbsp;&nbsp;Sign In</a></li>
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
<!-- End Navbar -->

<div class="wrapper">
    <div class="header header-filter">
        <div id="particles-js" class="particle-css"style="background-color: #270073;height: inherit;z-index: 2;width: inherit; position: relative;">
        </div>
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 logo-card text-center" style="z-index: 5;">
                        <h1 class="title logo-text" style="color:#fff;">Fluxsion</h1>
                        <h4 class="logo-sub" style="color:#fff;">One Stop for all your streaming Whether it's audio or Video.</h4>
                        <a href="cat.php" class="btn btn-success btn-raised btn-lg logo-but-left">
                                <i class="material-icons">video_library</i>&nbsp;&nbsp;&nbsp;Watch Trending Video
                        </a>
                        <a href="audio.php" class="btn btn-success btn-raised btn-lg logo-but-right">
                                <i class="material-icons">audiotrack</i>&nbsp;&nbsp;&nbsp;Listen Trending Music
                        </a>
                        <br/>
                </div>
            </div>
        </div>
    </div>

	<div class="main main-raised animated slideInUp">
			<div class="container">
		    	<div class="section text-center section-landing" id="feature">
	                <div class="row">
	                    <div class="col-md-8 col-md-offset-2">
	                        <h2 class="title">Let's talk about it</h2>
	                        <h5 class="description">Fluxsion is Site where user can upload their favourite videos and watch others vidoes which are published by others, but only Videos can't be complete package for your entertainment so we add Audio streaming too which can also be a part for your fun.</h5>
	                    </div>
	                </div>

					<div class="features">
						<div class="row">
		                    <div class="col-md-4">
                                        <div class="info">
                                                <div class="icon icon-info">
                                                        <i class="material-icons">video_library</i>
                                                </div>
                                                <h4 class="info-title">Upload Videos</h4>
                                                <p>User not just can Upload Their Videos but also can control over Video by editing their Video and gettings stats of Like and Dislike</p>
                                        </div>
		                    </div>
		                    <div class="col-md-4">
                                        <div class="info">
                                                <div class="icon icon-success">
                                                        <i class="material-icons">network_check</i>
                                                </div>
                                                <h4 class="info-title">Unlimited Streaming</h4>
                                                <p>A User can Stream All Videos and Audio Unlimited without any Quality Boundation and user don't have to pay any Money.</p>
                                        </div>
		                    </div>
		                    <div class="col-md-4">
                                        <div class="info">
                                                <div class="icon icon-danger">
                                                        <i class="material-icons">audiotrack</i>
                                                </div>
                                                <h4 class="info-title">Pre-define Audio</h4>
                                                <p>User will get Huge Pre-define Playlist of all kind of category whether it's Bollywood or Hollywood.</p>
                                        </div>
		                    </div>
		                </div>
					</div>
	            </div>

	        	<div class="section text-center" id="contact">
	                <h2 class="title">Fluxsion Developer</h2>

					<div class="team">
						<div class="row">
							<div class="col-md-6 col-md-offset-3">
			                    <div class="team-player">
			                        <img src="assets/img/me.jpg" alt="Thumbnail Image" class="img-raised img-circle">
			                        <h4 class="title">Hitanshu Sahu<br />
										<small class="text-muted">Full Stack Developer / UI & UX Designer / Graphics Designer</small>
									</h4>
			                        <p class="description">Contact Me</p>
									<a href="https://twitter.com/Phantom_cluster" target="_blank" class="btn btn-simple btn-just-icon "><i class="fa fa-twitter"></i></a>
									<a href="https://www.instagram.com/not_phantom.cluster" target="_blank" class="btn btn-simple btn-just-icon"><i class="fa fa-instagram"></i></a>
									<a href="https://www.facebook.com/insider7enjoy" target="_blank" class="btn btn-simple btn-just-icon btn-default"><i class="fa fa-facebook-square"></i></a>
			                    </div>
			                </div>
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
	               Made with <i class="fa fa-heart heart" style="color:#f00000;"></i> &copy; <a href="http://fb.com/insider7enjoy" target="_blank" style="color:#000aff;">Phantom.Cluster</a> <script>document.write(new Date().getFullYear())</script>
	            </div>
	        </div>
	    </footer>
</div>


</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
    <!-- Parallex Js--->
    <script src="assets/js/parellex.js" type="text/javascript"></script>
    <!-- particle js-->
    <script src="assets/js/particles.js"></script>
    <script src="assets/js/app.js"></script>
    <script>
     $(document).ready(function(){
      // Add smooth scrolling to all links
      $("a").on('click', function(event) {

        // Make sure this.hash has a value before overriding default behavior
        if (this.hash !== "") {
          // Prevent default anchor click behavior
          event.preventDefault();

          // Store hash
          var hash = this.hash;

          // Using jQuery's animate() method to add smooth page scroll
          // The optional number (800) specifies the number of milliseconds it takes to scroll to the specified area
          $('html, body').animate({
            scrollTop: $(hash).offset().top
          }, 1000, function(){

            // Add hash (#) to URL when done scrolling (default click behavior)
            window.location.hash = hash;
          });
        } // End if
      });
    });
</script>
   
</html>
