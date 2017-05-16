<?php
include'../include/connect.php';
$q="select * from signup where id='$_SESSION[id]'";
$result=mysqli_query($con, $q);
$f= mysqli_fetch_assoc($result);


if($_SESSION==null){
    header('location:login.php');
}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="../assets/img/Favicon.ico">
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <title>Profile Page - Fluxsion</title>
	<meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />

	<!--     Fonts and icons     -->
	<link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons" />
    <link href="https://fonts.googleapis.com/css?family=Signika:300,400,600,700" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" />

	<!-- CSS Files -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />
    <link href="../assets/css/material-kit.css" rel="stylesheet"/>

</head>

<body class="profile-page">
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
                    <a class="navbar-brand" href="../index.php"><img src="../assets/img/logo1.png" style="margin-top: -15px;"></a>
        	</div>

        	<div class="collapse navbar-collapse" id="navigation-example">
        		<ul class="nav navbar-nav navbar-right">
    				<li>
                                    <a href="../user_dash/page/user.php">
                                            <i class="material-icons">account_circle</i><?php echo $f['name'];?>
    					</a>
    				</li>
                                <!--admin work-->
    				 <?php 
                                    if($f['id']=='2')
                                    {
                                        echo '<li>';
                                        echo '<a href="#" class="dropdown-toggle" data-toggle="dropdown">';
                                        echo '<i class="material-icons">people</i>';
                                        echo 'Admin Panel';
                                        echo '<b class="caret"></b>';
                                        echo '</a>';
                                        echo '<ul class="dropdown-menu">';
                                        echo '<li>';
                                        echo '<a href="../user_dash/page/vadmin.php?id='.$f['id'].'">';
                                        echo '<i class="material-icons">control_point</i>&nbsp;&nbsp;Video Category</a></li>';
                                        echo '<li clas="">';
                                        echo '<a href="../user_dash/page/audio_upload.php?id='.$f['id'].'"><i class="material-icons">library_music</i>&nbsp;&nbsp;Audio Upload</a></li>';
                                      
                                        echo '</ul>';
                                        echo  '</li>';
                                    }
                                ?>
                                <!--admin work finish-->
                                
                                <li>
                                    <a href="../user_dash/page/upload.php" >
							<i class="material-icons">cloud_upload</i>Upload New Video
						</a>
    				</li>
                                
                    <li>
                        <a href="logout.php">
                               <i class="fa fa-sign-out" aria-hidden="true"></i>
                                Logout
                            </a>
                    </li>
        		</ul>
        	</div>
    	</div>
    </nav>

    <div class="wrapper">
		<div class="header header-filter" style="background-image: url('../assets/img/city.jpg');"></div>

		<div class="main main-raised">
			<div class="profile-content">
	            <div class="container">
	                <div class="row">
	                    <div class="profile">
	                        <div class="avatar">
                                    <img src="../profile_pic/<?php echo $f['profile'] ?>" alt="Profile page" class="img-circle img-responsive img-raised">
	                        </div>
	                        <div class="name">
	                            <h3 class="title"><?php echo $f['name'] ?></h3>
								<h6><?php echo $f['designation'] ?></h6>
	                        </div>
	                    </div>
	                </div>
	                <div class="description text-center">
                        <p><?php echo $f['abouts'] ?></p>
	                </div>

                        <div class="row">
                            <div class="col-md-12">
                                <div class="card-content">
                                    <div class="card-content table-responsive">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>Video Name</th>
	                                    	<th>Views of Video</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr><?php
                                                    $vl="select * from upload_video where email='$_SESSION[email]'";
                                                    $v=mysqli_query($con, $vl);
                                                    while ($vid= mysqli_fetch_assoc($v)){
                                                 ?>
                                                    <td><?php echo $vid['title']; ?></td>
                                                    <td class="text-primary">Coming Soon </td>
                                                    
                                                    
                                                </tr>
                                            <?php }
                                                    ?>
	                                    </tbody>
	                                </table>

	                            </div>
	                                
	                            </div>
                                        <!-- End Profile Tabs -->
                            </div>
	                </div>

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
	               Made with <i class="fa fa-heart heart" style="color:#f00000;"></i> &copy; <a href="http://fb.com/insider7enjoy" target="_blank" style="color:#000aff;">Phantom.Cluster</a> <script>document.write(new Date().getFullYear())</script>
	            </div>
	        </div>
	    </footer>


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
    <script src="../assets/js/parellex.js" type="text/javascript"></script>
</html>
