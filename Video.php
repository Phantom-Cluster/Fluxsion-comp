<?php
error_reporting('0');
include 'include/connect.php';
$url=$_GET['vid'];
$_SESSION['vid']=$url;
//$re=$_GET['email'];
//$_SESSION['email']=$re;
 //$query="Select * from signup where email='$re'" ;
//$p= mysqli_query($con,$query);
//$pd=mysqli_fetch_assoc($p);

?>





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
<style>
    video::-internal-media-controls-download-button {
        display:none;
    }

    video::-webkit-media-controls-enclosure {
        overflow:hidden;
    }

    video::-webkit-media-controls-panel {
        width: calc(100% + 30px); /* Adjust as needed */
    }
    .vid-button
    {
        font-size: 18px;
    }
    .vid-button .act
    {    
        float:right;
        margin-right: 5px;
    }
        .vid-title
        {
            -webkit-box-shadow: 0px 7px 27px 0px rgba(191,191,191,0.76);
            -moz-box-shadow: 0px 7px 27px 0px rgba(191,191,191,0.76);
            box-shadow: 0px 7px 27px 0px rgba(191,191,191,0.76);
        }
        
        .vid
        {
            -webkit-box-shadow: 0px -7px 27px 0px rgba(191,191,191,0.76);
            -moz-box-shadow: 0px -7px 27px 0px rgba(191,191,191,0.76);
            box-shadow: 0px -7px 27px 0px rgba(191,191,191,0.76);
        }
</style>
</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-fixed-top">
    	<div class="container">
        	<!-- Brand and toggle get grouped for better mobile display -->
        	<div class="navbar-header">
        		<button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#navigation-example">
            		<span class="sr-only">Toggle navigation</span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
		            <span class="icon-bar"></span>
        		</button>
        		<a class="navbar-brand" href="index.php"><img src="assets/img/logo1.png" style="margin-top: -15px;"></a>
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
                                <li><a href="#"><i class="material-icons">person_add</i>&nbsp;&nbsp; Sign Up</a></li>
                                <li><a href="#"><i class="material-icons">person_outline</i>&nbsp;&nbsp;Sign In</a></li>
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
	<div class="main" style="margin-top:60px;" >
            <div class="container">
                <div class="section section-landing">
                    <div class="row">
                        <div class="col-md-12">
                            <?php
                            $vf=mysqli_query($con,"select * from upload_video where vid=$_REQUEST[vid]");

                            $f= mysqli_fetch_assoc($vf);
                           $s= $f['email'];
                            ?>
                            <div class="video-contain vid" style="background-color:#efefef;z-index:7;">
                                <video width="100%" height="80%" controls>
                                    <source src="v/<?php echo $f['file'] ?>" type="video/mp4">
                                    Your browser does not support HTML5 video.
                                </video>
                                <div class="col-xs-12  vid-title" style="margin-top:10px;z-index:5;">
                                    <div class="col-xs-6 col-sm-8">
                                        <h4 class="title"><?php echo $f['title'];?></h4>
                                        <p class="description"><?php echo $f['des'];?>.</p>
                                    </div>
                                    <div class="vid-button col-sm-4 col-xs-6 hide" style="margin:30px 0px;">
                                      <span class="act" style="color:#585858;"><i class="material-icons">thumb_down</i>2</span>
                                      <span class="act" style="color:#ff004e;"><i class="material-icons" >favorite</i>20</span>
                                      <span class="act" style="color:#0062ff;"><i class="material-icons">thumb_up</i>35</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <?php 
                    $pr= mysqli_query($con, "select * from signup where email='$s'");
                    $j= mysqli_fetch_assoc($pr);

                ?>
                <div class="section text-center">
                <h2 class="title">About the Uploader </h2>
                    <div class="team">
                        <div class="row">
                            <div class="col-md-6 col-md-offset-3">
                                <div class="team-player">
                                    <img src="assets/img/<?php echo $j['profile'] ?>" alt="Profile Image" class="img-raised img-circle">
                                    <h4 class="title"><a href="Profile/profile-page.php" style="color:#4000d1;"><?php echo $j['name']; ?></a><br/>
                                            <small class="text-muted"><?php echo $j['designation']?></small><br>
                                    </h4>
                                    <!--like dislike from profile-->
                                    <div class="text-center hide">
                                        <small class="description" >Total</small><br>
                                            <div style="margin-top:10px;">
                                                <span class="act" style="color:#0062ff;"><i class="material-icons">thumb_up</i>835</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="act" style="color:#ff004e;"><i class="material-icons" >favorite</i>920</span>&nbsp;&nbsp;&nbsp;&nbsp;
                                                <span class="act" style="color:#585858;"><i class="material-icons">thumb_down</i>12</span>
                                            </div>
                                     </div> 
                                    <p class="description" style="margin-top:20px;"><?php echo $j['abouts']?></p>
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

<!-- Sart Modal -->
<div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal" aria-hidden="true">
					<i class="material-icons">clear</i>
				</button>
				<h4 class="modal-title">Modal title</h4>
			</div>
			<div class="modal-body">
				<p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean. A small river named Duden flows by their place and supplies it with the necessary regelialia. It is a paradisematic country, in which roasted parts of sentences fly into your mouth. Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.
				</p>
			</div>
			<div class="modal-footer">
				<button type="button" class="btn btn-default btn-simple">Nice Button</button>
				<button type="button" class="btn btn-danger btn-simple" data-dismiss="modal">Close</button>
			</div>
		</div>
	</div>
</div>
<!--  End Modal -->


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
</html>
