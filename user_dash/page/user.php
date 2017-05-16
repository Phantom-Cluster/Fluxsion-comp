<?php
include '../../include/connect.php';
if(isset($_POST['submit'])){
    $designation= ucwords($_POST['designation']);
    $name= ucwords($_POST['name']);
    $about= ucwords($_POST['about']);
    /*
    $filename=$_FILES['profile']['tmp_name'];
    $path="../../profile_pic";
    $target=$_FILES['profile']['name'];
    move_uploaded_file($filename,$path.$target);
    $profile=$_FILES['profile']['name'];
      */
     
    $u="UPDATE signup set name='$name', designation='$designation', abouts='$about' WHERE id='$_SESSION[id]'" ;
    $u1=mysqli_query($con, $u);
    echo $u1;
    header('location:user.php');
}
$p="SELECT * FROM signup WHERE id='$_SESSION[id]'";
$f=mysqli_query($con, $p);
$result= mysqli_fetch_assoc($f);

if($_SESSION['email']==null){
    header('location:../../Profile/login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="#" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />

	<title>Update Profile ~ Fluxsion</title>

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
    <link href='http://fonts.googleapis.com/css?family=Roboto:400,700,300|Material+Icons' rel='stylesheet' type='text/css'>
    <style>
        .flipInX
        {
            animation-duration: .8s;
            animation-delay: .5s;
        }
        
        .fadeInDown
        {
            animation-duration: .61s;
        }
    </style>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="orange" data-image="../assets/img/sidebar-1.jpg">
			<div class="logo text-center supnova">
			 <a href="../../index.php"><img src="../assets/img/logo2.png"></a>
                
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
                                    <li class="hide">
	                    <a href="dashboard.php">
	                        <i class="material-icons" style="color:#9c27b0;" >dashboard</i>
	                        <p>Dashboard</p>
	                    </a>
	                </li>
	                <li class="active">
	                    <a href="user.php">
	                        <i class="material-icons">person</i>
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
	                    <a href="uploaded.php">
	                        <i class="material-icons text-gray" style="color:#f20079;">cloud_upload</i>
	                        <p>Upload New</p>
	                    </a>
	                </li>
                        <?php
                            if ($result['id']=='2')
                            {
                                   echo'<li>
                                            <a href="vadmin.php">
                                                <i class="material-icons text-gray" style="color:#18c61f;">control_point</i>
                                                <p>Video Categories </p>
                                            </a>
                                        </li>
                                        <li>
                                            <a href="audio_upload.php">
                                                <i class="material-icons text-gray" style="color:#0077c1;">library_music</i>
                                                <p>Audio Upload</p>
                                            </a>
                                        </li>
                                        <li>
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
						<a class="navbar-brand" href="#">Welcome <?php echo $result['name'];?></a>
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
	                    <div class="col-md-8">
	                        <div class="card">
	                            <div class="card-header" data-background-color="orange">
	                                <h4 class="title">Edit Profile</h4>
									<p class="category">Update your profile</p>
	                            </div>
	                            <div class="card-content">
                                        <form method="post">
	                                    <div class="row">
	                                        <div class="col-md-8">
                                                            <div class="form-group label-floating">
                                                                    <label class="control-label">You Are:</label>
                                                                    <input type="text" class="form-control" name="designation" value="<?php echo $result['designation']; ?>">
                                                            </div>
	                                        </div>
	                                        <div class="col-md-4">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Email address</label>
                                                            <input type="email" class="form-control" Value="<?php echo $result['email']; ?>"disabled>
                                                    </div>
	                                        </div>
	                                    </div>

	                                    <div class="row">
	                                        <div class="col-md-12">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Full Name</label>
                                                            <input type="text" class="form-control" name="name" value="<?php echo $result['name']; ?>">
                                                    </div>
	                                        </div>
	                                    </div>
                                            <!--<div class="row">
	                                        <div class="col-md-12">
                                                    <input type="file" class="" value="Upload Profile" name="profile"/>
	                                        </div>
	                                    </div> -->
                                            <div class="row">
	                                        <div class="col-md-12">
	                                            <div class="form-group">
	                                                <label>About Me</label>
                                                        <div class="form-group label-floating">
                                                            <label class="control-label"> Let Others know who you really are.</label>
                                                            <textarea class="form-control" rows="5" name="about"><?php echo $result['abouts']; ?></textarea>
                                                        </div>
	                                            </div>
	                                        </div>
	                                    </div>

	                                    <button type="submit" class="btn btn-primary pull-right" name="submit">Update Profile</button>
	                                    <div class="clearfix"></div>
	                                </form>
	                            </div>
	                        </div>
	                    </div>
						<div class="col-md-4 animated fadeInDown">
    						<div class="card card-profile">
    							<div class="card-avatar animated flipInX">
                                                            <a href="../../Profile/profile-page.php">
                                                                    <img class="img" src="../../profile_pic/<?php echo $result['profile'] ?>" />
    								</a>
    							</div>

    							<div class="content">
    								<h4 class="card-title"><?php echo $result['name']?></h4>
                                                                <h6 class="category text-gray"><?php echo $result['designation'];?></h6>
                                                                <p class="card-content"><?php echo $result['abouts'];?></p>
                                                                <a href="../../Profile/profile-page.php" class="hide btn btn-primary btn-round">Go to Your Profile</a>
    							</div>
    						</div>
		    			</div>
	                </div>
	            </div>
	        </div>

	        <footer class="footer">
	            <div class="container-fluid">
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
    <script>
        showNotification: function(from, align){
    	color = Math.floor((Math.random() * 4) + 1);

    	$.notify({
        	icon: "notifications",
        	message: "Welcome to <b>Fluxsion</b>."

        },{
            type: type[color],
            timer: 4000,
            placement: {
                from: from,
                align: align
            }
        });
	}
    </script>

</html>
