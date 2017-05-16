<?php
include 'include/connect.php';
//fetch query
$a=mysqli_query($con,"select * from audio where genre='$_REQUEST[genre]'");

//artist fetch
$sqa="select * from artist ORDER BY genre";
$qa= mysqli_query($con, $sqa);
$sqla="select * from artist where genre= '$_REQUEST[genre]'";
$q1a= mysqli_query($con, $sq1a);
$fa= mysqli_fetch_assoc($q1a);
//genre fetch
$sqg="select * from genre ORDER BY genre";
$qg= mysqli_query($con, $sqg);
$sq1g="select * from genre where genre= '$_REQUEST[genre]'";
$q1g= mysqli_query($con, $sq1g);
$f1g= mysqli_fetch_assoc($q1g);
//year fetch
$sqy="select * from year ORDER BY year";
$qy= mysqli_query($con, $sqy);
$sq1y="select * from year where year= '$_REQUEST[year]'";
$q1y= mysqli_query($con, $sq1y);
$f1y= mysqli_fetch_assoc($q1y);
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Browse Categories</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <style>
        .card-dim
        {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            display: inline-block;
            position: relative;
            background-color:#e2e2e2;
            height:150px;
            width:210px;
        }
        
        .master-card:hover
        {box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);}
        
        .master-card:hover master-card .card-dim .video-thumb
        {      
            opacity: 1;
             mix-blend-mode: multiply;
            
        }
        .video-thumb
        {
            background-size:cover;
            border-radius: 3px 3px 0px 0px;
            background-position:center;
            background-repeat: no-repeat;
            /*background-image: url('assets/img/music/MG.jpg');*/
            height: inherit;
            width: inherit;
            transition: filter .5s;
            filter: grayscale(100%);
        }
        .video-thumb:hover
        {
            filter: grayscale(0%);
        }
        .master-card
        {
          -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24);
            transition: all 0.3s cubic-bezier(.25,.8,.25,1);
            display: inline-block;
            position: relative;
            background-color:#fff;
            height: auto;
            width: auto;
            margin: 1.2rem;
        }
        .info-title
        {
            text-align: left;
            font-weight: 500;
            font-size: 0.9em;
            margin-top: 15px;
            margin-left: 15px;
            font-weight: 600;
        }
        .vid-play
        {
            color: rgba(255, 255, 255,0.85);;
            font-size: 7rem;
            margin-top: 22%;
            /*opacity: 0;*/
            transition: opacity .5s;
        }
        /*
        .vid-play:hover
        {
            opacity: 1;
        }*/
        .bg-vid
        {
            height: inherit;
            width: inherit;
            border-radius: 3px 3px 0px 0px;
            background-color: rgba(0, 0, 0,0.45);
            opacity: 0;
            transition:opacity .5s;
            
        }
        .bg-vid:hover
        {
            opacity: 0.9;
            border-radius: 3px 3px 0px 0px;
            
        }
        .cat-title-purple
        {
            color:#6200EA;
            font-size: 25px;
            font-weight: 400;
            text-align: left;
            margin-left: 90px;
            margin-bottom: 18px;
        }
        .cat-title-red
        {
            color:#D50000;
            font-size: 25px;
            font-weight: 400;
            text-align: left;
            margin-left: 90px;
            margin-bottom: 18px;
        }
        .cat-title-yellow
        {
            color:#FFAB00;
            font-size: 25px;
            font-weight: 400;
            text-align: left;
            margin-left: 90px;
            margin-bottom: 18px;
        }
        .cat-section
        {
            margin-top: 5rem;
        }
        .info-subtitle
        {
            color:#9e9e9e;
            text-align: left;
            margin-left: 18px;
            margin-top: -8px;
            font-size: 0.9em;
            font-weight: 400;
        }
        </style>
</head>

<body class="index-page">
<!-- Navbar -->
<nav class="navbar navbar-transparent navbar-success navbar-fixed-top navbar-color-on-scroll">
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
                                
                            </li>
                            <li>
                                <a href="user_dash/page/upload.php" >
                                    <i class="material-icons">cloud_upload</i>Upload New Video
                                </a>
                            </li>
                            <li>
                                <a href="cat.php" >
                                    <i class="material-icons">video_library</i>Watch Videos
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
		          
        		</ul>
        	</div>
    	</div>
    </nav>
<!-- End Navbar -->

<div class="wrapper">
	<div class="header header-filter" style="background-image: url('assets/img/audio2.jpeg');height:20vh;">
            <div class="container">
                <div class="row">
                    <div class="col-md-8 col-md-offset-2 text-center" style="margin-top:130px;">
                        <h1 class="title logo-browse" style="color:#fff;">Browse Music.</h1>
                    </div>
                </div>
            </div>
	</div>

    <div class="main" style="background-color:#f7f7f7;">
			<div class="container">
		    	<div class="section text-center section-landing" id="feature">
	                <div class="row">
	                    <div class="col-md-12 ">
	                        <h2 class="title">Search Your Music Here</h2>
                                <div class="row">
                                    <div class="col-sm-6 col-md-12">
                                        <div class="input-group col-xs-12">
                                            <span class="input-group-addon">
                                                    <i class="material-icons">search</i>
                                            </span>
                                            <input type="text" class="form-control" placeholder=" Search Your   'Music',    'Album',    'Song',     'Playlist'">
                                        </div>
                                    </div>
                                    
                                    <div class="col-xs-3 col-sm-2 col-md-1 col-md-offset-1 dropdown">
                                        <a href="" class="dropdown-toggle btn btn-simple" data-toggle="dropdown">
                                           <?php echo $f1['artist'];?>&nbsp;&nbsp;&nbsp;
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php 
                                              
                                             while( $f= mysqli_fetch_assoc($q)){
                                            ?>
                                            <li><a href="audio_1.php?artist=<?php echo $f['artist']?>"><?php echo $f['artist']; ?></a></li>
                                            <?php
                                             }
                                             ?>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3  col-sm-2 col-md-1 col-md-offset-3 dropdown">
                                        <a href="" class="dropdown-toggle btn btn-simple" data-toggle="dropdown">
                                           Select Genre
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php 
                                              $sg="select * from genre ORDER BY genre";
                                              $g= mysqli_query($con, $sg);
                                             while( $f= mysqli_fetch_assoc($g)){
                                            ?>
                                            <li><a href="audio_1.php?genre=<?php echo $f['genre']?>"><?php echo $f['genre']; ?></a></li>
                                            <?php
                                             }
                                             ?>
                                        </ul>
                                    </div>
                                    <div class="col-xs-3 col-sm-2 col-md-1 col-md-offset-3 dropdown">
                                        <a href="" class="dropdown-toggle btn btn-simple" data-toggle="dropdown">
                                           Select Year
                                            <b class="caret"></b>
                                        </a>
                                        <ul class="dropdown-menu">
                                            <?php 
                                              $sy="select * from year ORDER BY year";
                                              $y= mysqli_query($con, $sy);
                                             while( $f= mysqli_fetch_assoc($y)){
                                            ?>
                                            <li><a href="audio_1.php?year=<?php echo $f['year']?>"><?php echo $f['year']; ?></a></li>
                                            <?php
                                             }
                                             ?>
                                        </ul>
                                    </div>
                                    <div class=" col-xs-2 hide">
                                        <select class="form-control" id="category"  required name="genre" >
                                            <option value="">~Select Genre~</option>  
                                            <?php 
                                              $sg="select * from genre ORDER BY genre";
                                              $g= mysqli_query($con, $sg);
                                             while( $f= mysqli_fetch_assoc($g)){
                                              ?>  
                                            <option><?php echo $f['genre']; ?></option>
                                            <?php
                                                 }
                                                 ?>
                                        </select>
                                    </div>
                                </div>
	                    </div>
	                </div>

                        <div class="features" id="vid">
                            <div class="row">

                                <div class="cat-title-purple">
                                    <div class="container-fluid">
                                        <b><?php 
                                            echo $f1['artist'];
                                        ?>'s Album</b>
                                    </div>
                                </div>
                                <?php
                                    while($al=mysqli_fetch_assoc($a))
                                    {
                                ?>
                                <!--  tech video thumbnails start-->
                                <a href="#">
                                <div class="col-md-3 col-sm-4 col-xs-6 ">
                                    <div class="master-card">
                                        <div class="card-dim">
                                            <div class="video-thumb" style="background-image: url('music/cvr/<?php echo $al['cover']?>');">
                                                <div class="bg-vid"><span><i class="material-icons vid-play">play_arrow</i></span></div>
                                            </div>
                                        </div>
                                        <h4 class="info-title"><?php echo $al['album'];?></h4>
                                        <h5 class="info-subtitle hide"> 13 Songs</h5>
                                    </div>
                                </div>
                                </a>
                                    <?php }?>
                                <!-- video thumbnails stop-->
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
</html>
