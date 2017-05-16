<?php

include 'include/connect.php';

?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="assets/img/favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Artist Songs</title>

	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="assets/css/material-kit.css" rel="stylesheet"/>
    <link href="assets/css/animate.css" rel="stylesheet"/>
    <link href="assets/css/waves.min.css" rel="stylesheet"/>
    <style>
        
        h4{
            
        }
         input[type="range"] {
            
             width: 100%;
             top: 50%;
            -webkit-transform: translateY(-50%);
            transform: translateY(-50%);
        }
        audio::-internal-media-controls-download-button {
            display:none;
        }

        audio::-webkit-media-controls-enclosure {
            overflow:hidden;
        }

        audio::-webkit-media-controls-panel {
            width: calc(100% + 35px); /* Adjust as needed */
        }
        
        .title 
        {
            font-weight: 600;
            color: #6e00ff;
            font-size: 45px;
            line-height: 38px;
            
        }
        @-webkit-keyframes hue {
            from {
              -webkit-filter: hue-rotate(0deg);
            }

            to {
              -webkit-filter: hue-rotate(-360deg);
            }
          }
        .text-muted 
        {
            font-size: 15px;
        }
        
        a
        {
            color:black;
            text-decoration: none;
        }
        .current-song
        {
            
        }
        .header-filter:after
        {
            background: linear-gradient(141deg, rgba(15,184,173,0.50) 0%, rgba(31,200,219,0.55) 51%, rgba(44,181,232,0.50) 75%);
            animation: hue 60s infinite linear;
            position: absolute;
            z-index: 1;
            width: 100%;
            height: 100%;
            display: block;
            left: 0;
            top: 0;
            content: "";
            background-color: rgba(0, 0, 0, 0.4);
        }
        .main
        {
            transition: all .8s ease-in-out ; 
        }
        .header
        {
            transition: all 1.0s ease-in-out ; 
        }
        .rollIn
        {
            animation-duration: 1s;
            animation-delay: 1s;
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
                            <li>
                                <?php 
                                    $_SESSION['a']=$_GET['artist'];
                                   //artist cover and profile fetch
                                   $sq1="select * from artist where artist= '$_SESSION[a]'";
                                   $q1= mysqli_query($con, $sq1);
                                   $f1= mysqli_fetch_assoc($q1);
                                   ?>
                                <a href="" class="dropdown-toggle" data-toggle="dropdown">
                                    <i class="material-icons">person_pin</i>
                                    Change Artist
                                    <?php //echo $f1['artist'];?>&nbsp;&nbsp;&nbsp;
                                    <b class="caret"></b>
                                </a>
                                <ul class="dropdown-menu">

                                    <?php 
                                    //artist dropdown fetch
                                    $sq="select * from artist ORDER BY artist";
                                    $q= mysqli_query($con, $sq);   
                                     while( $f= mysqli_fetch_assoc($q)){
                                    ?>
                                    <li><a href="artist.php?artist=<?php echo $f['artist']?>"><?php echo $f['artist']; ?></a></li>
                                    <?php
                                     }
                                     ?>
                                </ul>
                            </li>
		          
        		</ul>
        	</div>
    	</div>
    </nav>
<!-- End Navbar -->

<div class="wrapper" style="background-color:f7f7f7;">
        
    <div class="header header-filter animated zoomIn" style="background-color:black;background-image: url('artist/cvr/<?php echo $f1['artistcvr'];?>');filter: blur(0px); height:65vh;"></div>
    <div class="main" style="background-color:#f7f7f7;">
        <div class="container">
            <div class="section  " style="padding:0px;">
                <div class="team" style="margin:0px;">
                    <div class="row">
                        <div class="col-md-12" style="background-color">
                            <div class="team-player">
                                <div class="col-sm-2 col-xs-2" style="margin-top:-80px">
                                   <img src="artist/pic/<?php echo $f1['artistpic'];?>" alt="Artist Photo" class="img-raised img-responsive img-circle animated rollIn "> 
                                </div>
                                <div class="col-xs-12 col-sm-8 col-md-offset-1 col-sm-offset-1 ">
                                    <h4 class="title" style=""><?php echo $f1['artist'];?><br /><br>
                                        <small class="text-muted text-justify" style=""><?php echo $f1['details'];?></small>
                                    </h4>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div>
            
                            
        </div>
            <div class="features col-sm-8 col-sm-offset-2 col-xs-offset-1 col-xs-10" id="vid" style="margin-top:-80px;">
            <div class="row ">
                
                <table class="table" style="margin-bottom:100px;">
                        <thead class="text-info">
                            <th><?php echo $f1['artist'];?>'s Songs</th>
                            <th>Year</th>
                            <th>Genre</th>
                        </thead>
                        <tbody id="playlist">
                            <?php //artist fetch query
                            $a=mysqli_query($con,"select * from audio where artist='$_SESSION[a]'");
                            while($al=mysqli_fetch_assoc($a))
                            { ?>
                            <tr class="current-song">
                                <td > <a href="music/songs/<?php echo $al['audio']?>"><?php echo $al['album'];?></a></td>
                                <td class="text-primary"><?php echo $al['year'];?> </td>
                                <td class="text-primary"><?php echo $al['genre'];?> </td>
                             </tr>
                            <?php } ?>
                        </tbody>
                    </table>

                <!-- audio stop-->
            </div>
                
            </div>
            </div>
        
         <!-- audio player-->
        
            <audio id="audioPlayer" controls style="width:99vw;bottom:0;position:fixed;bottom:0px;" class="text-center">
             <source src="" type="audio/mp3" >
            </audio>
        
    </div>
   
    
</div> 
</body>
	<!--   Core JS Files   -->
	<script src="assets/js/jquery.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/material.min.js"></script>
	<script src="assets/js/nouislider.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap-datepicker.js" type="text/javascript"></script>
	<script src="assets/js/material-kit.js" type="text/javascript"></script>
        <!--player-->
        
        <script src="audioPlayer1.js" type="text/javascript"></script>
        <script>
        // loads the audio player
        audioPlayer();
        
        
        </script>
        <script>
            $(window).scroll(function(){
            var wScroll = $(this).scrollTop();
            
            $('.header').css({
                'transform' : 'translate(0px, '+wScroll/1.5 +'px)'
                
             });
             
         });
        </script>
    <!-- Parallex Js--->
    
</html>