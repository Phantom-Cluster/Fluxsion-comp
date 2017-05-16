<?php
include '../../include/connect.php';

/*fetching Data*/
$p="SELECT * FROM signup WHERE id='$_SESSION[id]'";
$f=mysqli_query($con, $p);
$result= mysqli_fetch_assoc($f);

/*Session Null*/
if($_SESSION==null){
    header('location:../../Profile/login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <link rel="icon" type="image/png" href="#" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

    <title>Dashboard ~ Fluxsion</title>

    <meta content='width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=0' name='viewport' />
    <meta name="viewport" content="width=device-width" />

    <!-- Bootstrap core CSS     -->
    <link href="../assets/css/bootstrap.min.css" rel="stylesheet" />

    <!--  Material Dashboard CSS    -->
    <link href="../assets/css/material-dashboard.css" rel="stylesheet"/>

    <!--  Animation Css     -->
    <link href="../assets/css/animate.css" rel="stylesheet" />

    <!--     Fonts and icons     -->
    <link href="http://maxcdn.bootstrapcdn.com/font-awesome/latest/css/font-awesome.min.css" rel="stylesheet">
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300,500,600|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
    .card-header
        {
            -webkit-animation-duration:2s;
        }
    </style>
</head>

<body>

	<div class="wrapper">

	    <div class="sidebar" data-color="purple" data-image="../assets/img/sidebar-1.jpg">
			
			<div class="logo text-center">
			<a href="../../index.php"><img src="../assets/img/logo2.png"></a>
			</div>

	    	<div class="sidebar-wrapper">
	            <ul class="nav">
	                <li class="active">
	                    <a href="#.php">
	                        <i class="material-icons" >dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="user.php">
	                        <i class="material-icons" style="color:#ff9300;">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li>
	                    <a href="uploaded.php">
	                        <i class="material-icons text-gray" style="color:#2994ff;">cloud_done</i>
	                        <p>Uploaded Videos</p>
	                    </a>
	                </li>
                        <li>
                            <a href="upload.php">
                                <i class="material-icons text-gray" style="color:#f20079;">cloud_upload</i>
                                <p>Upload New</p>
                            </a>
                        </li>
                        <?php
                            if ($result['email']=='hitansh.hacker1992@gmail.com')
                            {
                                   echo'<li>
                                            <a href="vadmin.php">
                                                <i class="material-icons text-gray" style="color:#18c61f;">control_point</i>
                                                <p>Video Categories </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="audio_upload.php">
                                                <i class="material-icons text-gray" style="color:#ff0000;">library_music</i>
                                                <p>Audio Upload</p>
                                            </a>
                                        </li>
                                        <li >
                                            <a href="useraccess.php">
                                                <i class="material-icons text-gray" style="color:#1A237E">block</i>
                                                <p>User Access</p>
                                            </a>
                                        </li>';
                            }
                        ?>
	            </ul>
	    	</div>
	    </div>

	    <div class="main-panel">
			<nav class="navbar navbar-transparent navbar-absolute">
				<div class="container-fluid">
					<div class="navbar-header">
						<button type="button" class="navbar-toggle" data-toggle="collapse">
							<span class="sr-only">Toggle navigation</span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
							<span class="icon-bar"></span>
						</button>
						<a class="navbar-brand" href="#">Welcome <?php echo$result['name']; ?></a>
					</div>
					<div class="collapse navbar-collapse">
						<ul class="nav navbar-nav navbar-right">
							<li>
                                                            <a href="../../Profile/logout.php" style="background-color:#e1e1e1">
									<i class="material-icons">person</i>Logout
                                                            </a>
                                                        </li>
						</ul>
                                        </div>
				</div>
			</nav>

			<div class="content">
				<div class="container-fluid">
					<div class="row">
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header animated fadeInUp" data-background-color="orange">
									<i class="material-icons">ondemand_video</i>
								</div>
								<div class="card-content">
									<p class="category">Today View</p>
									<h3 class="title">986</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons md-18">update</i> Just Updated
									</div>
								</div>
							</div>
</div>
                        <div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header animated fadeInUp" data-background-color="green">
									<i class="fa fa-thumbs-up" ></i>
								</div>
								<div class="card-content">
									<p class="category">Likes</p>
									<h3 class="title">245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header animated fadeInUp" data-background-color="red">
									<i class="fa fa-thumbs-down" ></i>
								</div>
								<div class="card-content">
									<p class="category">Dislike</p>
									<h3 class="title">75</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>

						<div class="col-lg-3 col-md-6 col-sm-6">
							<div class="card card-stats">
								<div class="card-header animated fadeInUp" data-background-color="blue">
									<i class="fa fa-user-plus" ></i>
								</div>
								<div class="card-content">
									<p class="category">Followers</p>
									<h3 class="title">245</h3>
								</div>
								<div class="card-footer">
									<div class="stats">
										<i class="material-icons">update</i> Just Updated
									</div>
								</div>
							</div>
						</div>
					</div>


					<div class="row">
						

						<div class="col-lg-12 col-md-12">
							<div class="card">
	                            <div class="card-header" data-background-color="purple">
	                                <h4 class="title">Progess State</h4>
	                                <p class="category"><i class="material-icons" style="font-size:20px">dashboard</i> Dashboard Report of your Videos</p>
	                            </div>
	                            <div class="card-content table-responsive">
	                                <table class="table table-hover">
	                                    <thead class="text-primary">
	                                        <th style="font-weight:500">User Name</th>
	                                    	<th><i class="fa fa-thumbs-up" style="color:blue;" ></i></th>
	                                    	<th><i class="fa fa-thumbs-down" style="color:#f00000;"></i></th>
	                                    	<th style="font-weight:500">Comment</th>
	                                    </thead>
	                                    <tbody>
	                                        <tr>
	                                        	<td>Phantom.Cluster</td>
	                                        	<td>Yes</td>
	                                        	<td></td>
	                                        	<td>Very Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love it</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Tony Stark</td>
	                                        	<td>Yes</td>
	                                        	<td></td>
	                                        	<td>Very Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love itVery Good Video really Appriceated, love it</td>
	                                        </tr>
	                                        <tr>
	                                        	<td>Jarvis</td>
	                                        	<td></td>
	                                        	<td style="color:#ff0000">Yes</td>
	                                        	<td>Worst Video Ever, Please Improve Video.</td>
	                                        </tr>
	                                        
	                                    </tbody>
	                                </table>
	                            </div>
	                        </div>
						</div>
					</div>
				</div>
			</div>

			<footer class="footer">
				<div class="container-fluid">
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
					<p class="copyright pull-right">
						Made with <i class="fa fa-heart heart" style="color:#f00000;"></i> &copy; <a href="http://fb.com/insider7enjoy" target="_blank">Phantom.Cluster</a> <script>document.write(new Date().getFullYear())</script>
					</p>
				</div>
			</footer>
		</div>
	</div>

</body>

	<!--   Core JS Files   -->
	<script src="../assets/js/jquery-3.1.0.min.js" type="text/javascript"></script>
	<script src="../assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="../assets/js/material.min.js" type="text/javascript"></script>

	<!--  Charts Plugin -->
	<script src="../assets/js/chartist.min.js"></script>

	<!--  Notifications Plugin    -->
	<script src="../assets/js/bootstrap-notify.js"></script>

	<!--  Google Maps Plugin    -->
	<script type="text/javascript" src="https://maps.googleapis.com/maps/api/js"></script>

	<!-- Material Dashboard javascript methods -->
	<script src="../assets/js/material-dashboard.js"></script>

	<!-- Material Dashboard DEMO methods, don't include it in your project! -->
	<script src="../assets/js/demo.js"></script>

	<script type="text/javascript">
    	$(document).ready(function(){

			// Javascript method's body can be found in assets/js/demos.js
        	demo.initDashboardPageCharts();

    	});
	</script>

</html>
