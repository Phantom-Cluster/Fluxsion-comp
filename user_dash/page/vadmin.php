<?php
include '../../Include/connect.php';
if(isset($_POST['submit'])){
    $cat=$_POST['cat'];
    $upl="insert into vid_dropdown(cat)values('$cat')";
    $result=mysqli_query($con, $upl);
}


if($_SESSION==null){
    header('location:../../Profile/login.php');
}

$p="SELECT * FROM signup WHERE id='$_SESSION[id]'";
$f=mysqli_query($con, $p);
$result= mysqli_fetch_assoc($f);

if($_SESSION==null){
    header('location: ../../Profile/login.php');
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
        file-style
        {
            padding: 58px auto;
            margin: 15px 1px; 
            background-color: #00ccff;
            box-shadow: 0 14px 26px -12px  rgba(0,204,255,0.42), 0 4px 23px 0px  rgba(0,204,255,0.12), 0 8px 10px -5px  rgba(0,204,255,0.2);
            border-radius: 3px;
            border:1px solid #00ccff;
            color:#fff;
            border-radius:2px;
            text-align:center;
            position: relative;
            float:left;
            cursor:pointer
        }
        
        hide_file
        {
            position: absolute;
            z-index: 1000;
            
            opacity: 0;
            cursor: pointer;
            right: 0;
            top: 0;
            height: 100%;
            font-size: 14px;
            width: 100%;
        }
        
        uploadbut
        {
            line-height: 2.0em;
            
            text-transform: uppercase;
            font-size: 12px;
        }
        
        h5
        {
            font-size: 1.2em;
            font-weight: 400;
        }
    </style>
    
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="green" data-image="../assets/img/sidebar-1.jpg">
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
	                <li>
	                    <a href="user.php">
	                        <i class="material-icons" style="color:#ff9300;">person</i>
	                        <p>User Profile</p>
	                    </a>
	                </li>
	                <li >
                            <a href="uploaded.php">
	                        <i class="material-icons text-gray" style="color:#2994ff;">cloud_done</i>
	                        <p>Uploaded Videos</p>
	                    </a>
	                </li >
                        <li >
	                    <a href="upload.php">
	                        <i class="material-icons text-gray" style="color:#f20079;">cloud_upload</i>
	                        <p>Upload New</p>
	                    </a>
	                </li>
                       <?php
                            if ($result['id']=='2')
                            {
                                   echo'<li class="active">
                                            <a href="vadmin.php">
                                                <i class="material-icons text-gray">control_point</i>
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="green">
	                                <h4 class="title">Add New Categories</h4>
                                            <p class="category"> Write New Category Below</p>
	                            </div>
                                    
	                            <div class="card-content">
                                        <form method="post" enctype="multipart/form-data">
                                            <div class="col-md-8 ">
                                                <div class="form-group label-floating">
                                                        <label class="control-label">Enter New Category</label>
                                                        <input type="text" class="form-control" name="cat" required>
                                                </div>
                                            </div>


                                            <div class="col-md-offset-2 col-md-2">
                                                <input type="submit" class="btn btn-primary pull-right" name="submit">
                                            </div>
                                        </form>
	                            </div>
                                        
	                        </div>
                                
                                <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title"> List of Pre-Defined Category</h4>
                                            <p class="category"> Choose Wisely Before Delete Any Category</p>
	                            </div>
                                    
	                            <div class="card-content">
                                        <div class="col-md-12">
                                        <table class="table card-content table-responsive">
                                            <tr>
                                                <th class="hide">id</th>
                                                 <th>Category</th>
                                                 <th>Action</th>
                                            </tr>
                                            <?php 
                                                 $sq="select * from vid_dropdown";
                                                 $q= mysqli_query($con, $sq);
                                                while( $f= mysqli_fetch_assoc($q)){
                                            ?>  
                                            <tr>
                                                <td class="hide"> <?php echo $f['id'];?></td>
                                                <td><h5 class="title"> <?php echo $f['cat'];?></h5></td>
                                                <td> <a href="delete.php?id=<?php echo $f['id'];?>">
                                                        <button class="btn btn-danger btn-just-icon">
                                                            <i class="material-icons">delete_forever</i>
                                                        </button>
                                                    </a>
                                                </td>
                                                <?php
                                            }?>
                                            </tr>
                                        </table>
                                        </div>
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
        
        $(function() {

  // We can attach the `fileselect` event to all file inputs on the page
  $(document).on('change', ':file', function() {
    var input = $(this),
        numFiles = input.get(0).files ? input.get(0).files.length : 1,
        label = input.val().replace(/\\/g, '/').replace(/.*\//, '');
    input.trigger('fileselect', [numFiles, label]);
  });

  // We can watch for our custom `fileselect` event like this
  $(document).ready( function() {
      $(':file').on('fileselect', function(event, numFiles, label) {

          var input = $(this).parents('.input-group').find(':text'),
              log = numFiles > 1 ? numFiles + ' files selected' : label;

          if( input.length ) {
              input.val(log);
          } else {
              if( log ) alert(log);
          }

      });
  });
  
});
    </script>

</html>
