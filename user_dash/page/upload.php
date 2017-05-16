<?php

include '../../Include/connect.php';

$p="SELECT * FROM signup WHERE id='$_SESSION[id]'";
$f=mysqli_query($con, $p);
$result= mysqli_fetch_assoc($f);
$e=$result['email'];
$_SESSION['email']=$e;
//session work
if($_SESSION['id']==null)
//if(isset($_SESSION['email']))
    {
    header('location:../../Profile/login.php');
}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="utf-8" />
	<link rel="icon" type="image/png" href="#" />
	<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
	<title>Video Upload ~ Fluxsion</title>

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
        input[type="file"] {
            cursor: pointer !Important;
          }
          input[type="file"]::-webkit-file-upload-button {
            background: #f20079;
            border: 0;
            padding: 1em 2em;
            cursor: pointer;
            color: #fff;
            border-radius: .2em;
          }
          input[type="file"]::-ms-browse {
            background: #f20079;
            border: 0;
            padding: 0.5em 1em;
            cursor: pointer;
            color: #fff;
            border-radius: .2em;
          }
        
    </style>
    
</head>

<body>

    <div class="wrapper" >
	    <div class="sidebar"  data-color="pink" data-image="./assets/img/sidebar-1.jpg">
                <div class="logo text-center supnova">
                    <a href="../../index.php"><img src="../assets/img/logo2.png"></a>

                </div>

	    	<div class="sidebar-wrapper" >
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
	                <li >
                            <a href="uploaded.php">
	                        <i class="material-icons text-gray" style="color:#2994ff;">cloud_done</i>
	                        <p>Uploaded Videos</p>
	                    </a>
	                </li >
                        <li class="active">
	                    <a href="upload.php">
	                        <i class="material-icons text-gray">cloud_upload</i>
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
	                    <div class="col-md-12">
	                        <div class="card">
	                            <div class="card-header" data-background-color="pink">
	                                <h4 class="title">Upload New Videos</h4>
									<p class="category"> Select only one Category from Category Section</p>
	                            </div>
                                    
	                            <div class="card-content">
                                        <form method="post" enctype="multipart/form-data">
                                            <input type="hidden" name="email" value="<?php echo $e;?>">
                                                <div class="col-md-8 ">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Title of Video</label>
                                                            <input type="text" class="form-control" name="title" required>
                                                    </div>
                                                </div>
                                                    
                                                <div class="col-md-3 col-md-offset-1">
                                                    <select class="form-control" id="category"  required name="cat" >
                                                          <?php 
                                                          $sq="select * from vid_dropdown ORDER BY cat";
                                                          $q= mysqli_query($con, $sq);
                                                         while( $f= mysqli_fetch_assoc($q)){
                                                          ?>   
                                                        <option><?php echo $f['cat']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-12 ">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Description of Video</label>
                                                            <input type="text" class="form-control" name="des" required>
                                                    </div>
                                                </div>
                                               
                                                <div class="col-md-3 ">  
                                                    <input type="file" name="video_file" class="" >
                                                </div>
                                                <div class="col-md-offset-2 col-md-2">
                                                    <input type="submit" class="btn btn-primary pull-right" name="submit">
                                                </div>
                                        </form>
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
                                    <a href="../../index.php#feature">
                                                About
                                        </a>
                                </li>
                                <li>
                                        <a href="../../index.php#contact">
                                                Contact
                                        </a>
                                </li>
                                <li class="hide">
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
<?php

if(isset($_POST['submit'])){
    $cat=$_POST['cat'];
   $email=$_POST['email'];
    $title=$_POST['title'];
    $des=$_POST['des'];
    //move_uploaded_file($_FILES['f1']['tmp_name'],"../../v/".$_FILES['f1']['name']);
    //$file=$_FILES['f1']['name'];
    //profile upload start
    $target_dir = "../../v/";
    $target_file = $target_dir .$_FILES["video_file"]["name"];
    $uploadOk = 1;
    $imageFileType = pathinfo($target_file,PATHINFO_EXTENSION);
    //profile extension check
    if($imageFileType != "MP4" && $imageFileType != "mp4") {
    echo"<script> alert('Sorry, only MP4 files are allowed.')</script>";
    $uploadOk = 0;
    }
    // Check if $uploadOk is set to 0 by an error
    if ($uploadOk == 0) {
        echo"<script type='text/javascript'>alert('Sorry, your file was not uploaded.)</script>";
    // if everything is ok, try to upload file
    } else {
        //move file to db and dir
        if (move_uploaded_file($_FILES["video_file"]["tmp_name"], $target_file.$_FILES['video_file']['name'])) {
            $file=$_FILES["video_file"]["name"];
            //insert into DB
            $upl="insert into upload_video(cat,title,file,email,des)values('$cat','$title','$file','$email','$des')";
            $result=mysqli_query($con, $upl);
            //$sq="insert into signup(name,email,pass,cpass,gender,designation,dob,profile,abouts,status)values('$name','$email','$pass','$confpass','$gender','$designation','$dob','$profile','$about','$st')";
            //$result=mysqli_query($con, $sq);
            if ($result)
            {
                echo"<script type='text/javascript'>alert('Video Uploaded Successfully')</script>";
            }
            //header('location:login.php');
            //echo "The file ". basename( $_FILES["profile"]["name"]). " has been uploaded.";
        } else {
            echo"<script type='text/javascript'>alert('Video Upload Failed')</script>";
        }
    }
    //$upl="insert into upload_video(cat,title,file,email,des)values('$cat','$title','$file','$email','$des')";
    //$result=mysqli_query($con, $upl);
    
    if ($result)
    {
        echo '<script>Uploaded Successfully</script>';
    }
}


?>