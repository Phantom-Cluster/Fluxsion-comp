<?php
include 'include/connect.php';
//fetch query

$va=mysqli_query($con,"select * from upload_video");
$vad =0;
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Browse Videos</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <style>
        /*card design*/
        .card-dim
        {
            -webkit-border-radius: 3px;
            -moz-border-radius: 3px;
            border-radius: 3px;
            display: inline-block;
            position: relative;
            background-color:#e2e2e2;
            height:90px;
            width:160px;
        }
        .master-card:hover 
        {
             box-shadow: 0 10px 20px rgba(0,0,0,0.19), 0 6px 6px rgba(0,0,0,0.23);
        }
        
        .vidthumb
        {
            border-radius: 3px;
            z-index: 10;
            position: relative;
        }
        .video-thumb
        {
            background-size:cover;
            border-radius: 3px;
            background-position:center;
            background-repeat: no-repeat;
            height: inherit;
            width: inherit;
            transition: filter .5s;
            z-index: 6;
            position: relative;
            filter: grayscale(100%);
            transition: transform .2s cubic-bezier(.25,.8,.25,1);
        }
        .video-thumb:hover
        {
            filter: grayscale(0%);
            transform: scale(1.1);
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
            font-weight: 500;
            font-size: 0.9em;
            height: auto;
            margin: 15px 2px;
        }
        .vid-play
        {
            color: white;
            font-size: 8rem;
            margin-top: 5%;
            opacity: 0;
            transition: opacity .5s;
        }
        .vid-play:hover
        {
            opacity: 1;
        }
        .bg-vid
        {
            height: inherit;
            width: inherit;
            background-color: rgba(0, 0, 0,0.20);
            opacity: 0;
            position: relative;
            margin-top: -6.9em;
            z-index: 66;
            transition:opacity .5s;
            
        }
        .bg-vid:hover
        {
            opacity: 0.7;
            border-radius: 3px;
            
        }
        
         /*title design*/
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
                        <a href="audio.php" >
                            <i class="material-icons">audiotrack</i>Listen Music
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
    <div class="header header-filter" style="background-image: url('assets/img/macbnw.jpeg');height:60vh;">
        <div class="container">
            <div class="row">
                <div class="col-md-8 col-md-offset-2 text-center" style="margin-top:130px;">
                    <h2 class="title logo-browse" style="color:#fff;">Browse Videos.</h2>
                </div>
            </div>
        </div>
    </div>
    <div class="main" style="background-color:#f7f7f7;">
	<div class="container">
            <div class="section  section-landing" id="feature">
                <!-- Search Box-->
                <div class="row hide">
                    <div class="col-md-10 col-md-offset-1">
                        <h2 class="title">Search Over Here</h2>
                        <h5 class="description">
                            <div class="input-group">
                                    <span class="input-group-addon">
                                            <i class="material-icons">search</i>
                                    </span>
                                <form action="search.php" method="post">
                                <input type="text" class="form-control" name="search" placeholder="'Trailers',    'Music',    'Movies'    or    Search Anything">
                                </form>

                            </div>
                        </h5>
                    </div>
                </div>
                <!-- Search Box end-->

                <div>
                        <!--  video thumbnails start-->
                    <?php if(is_null($vad)) {}
                    else {
                            echo '<div class="row">
                                    <div class="cat-title-yellow">
                                        <div class="container-fluid">
                                            <b>All uploaded Videos</b>
                                        </div>
                                    </div>';
                          }?>
                    <div class="features col-sm-10 col-xs-10 col-xs-offset-1 " id="vid" style="margin-top:-80px;">
                        <div class="row ">
                            <table class="table" style="margin-bottom:100px;">
                                <thead class="text-info">
                                    <th>Video Title</th>
                                    <th>Category</th>
                                    <th>Category</th>
                                </thead>
                                <tbody>
                                    <?php while($vad=mysqli_fetch_assoc($va))
                                    {?>
                                    <tr>
                                        <td > <a href="video.php?vid=<?php echo $vad['vid']?>"><?php echo $vad['title'];?></a></td>
                                        <td class="text-primary"><?php echo $vad['cat'];?> </td>
                                        <td class="text-primary"><?php echo $vad['des'];?> </td>
                                     </tr>
                                    <?php } ?>
                                </tbody>
                            </table>
                            <!-- video stop-->
                        </div>
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
</html>
