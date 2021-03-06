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

	<title>User Access ~ Fluxsion</title>

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
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="indigo" data-image="../assets/img/sidebar-1.jpg">
			<div class="logo text-center supnova">
			 <a href="../../index.php"><img src="../assets/img/logo2.png"></a>
                
			</div>

	    	<div class="sidebar-wrapper">
				<ul class="nav">
                                    <li class="hide" >
	                    <a href="dashboard.php">
	                        <i class="material-icons" style="color:#9c27b0;" >dashboard</i>
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
                                                <i class="material-icons text-gray" style="color:#ff0000;">library_music</i>
                                                <p>Audio Upload</p>
                                            </a>
                                        </li>
                                        <li class="active">
                                            <a href="useraccess.php">
                                                <i class="material-icons text-gray">block</i>
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="indigo">
	                                <h4 class="title">Management of Users </h4>
					<p class="category">Block User From Accessing Their Profile</p>
	                            </div>
	                            <div class="card-content">
	                                <table class="table">
	                                    <thead class="text-primary">
	                                    	<th>User Name</th>
                                                <th>E-mail</th>
	                                    	<th>activate an Account</th>
                                                <th>block an account</th>	
	                                    </thead>
                                            <?php
                                            $uq=mysqli_query($con,"select * from signup");
                                            while($u=mysqli_fetch_assoc($uq))
                                            {?>
	                                    <tbody>
	                                        <tr>
                                                    <td><?php echo $u['name']; ?></td>
                                                    <td class="text-primary"><?php echo $u['email'];?></td>
                                                    <td> <a href="ua.php?id=<?php echo $u['id'];?>">
                                                            <button class="btn btn-success btn-just-icon">
                                                                <i class="material-icons">check_circle</i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                    <td> <a href="ub.php?id=<?php echo $u['id'];?>">
                                                            <button class="btn btn-danger btn-just-icon">
                                                                <i class="material-icons">highlight_off</i>
                                                            </button>
                                                        </a>
                                                    </td>
                                                </tr>
                                            </tbody>
                                            <?php } ?>
	                                </table>  
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
