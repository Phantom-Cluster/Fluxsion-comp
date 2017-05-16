<?php
/*connection Established*/
include '../../include/connect.php';

/*fetching Data*/
$p="SELECT * FROM signup WHERE id='$_SESSION[id]'";
$f=mysqli_query($con, $p);
$result= mysqli_fetch_assoc($f);

/*Session Null*/
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

	<title>Audio Uploaded ~ Fluxsion</title>

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
              background: #7e7e7e;
            border: 0;
            margin: 1em 0em;
            padding: 1em 2em;
            cursor: pointer;
            color: #fff;
            border-radius: .2em;
          }
          input[type="file"]::-ms-browse {
            background: #7e7e7e;
            border: 0;
            margin: 1em 0em;
            padding: 0.5em 1em;
            cursor: pointer;
            color: #fff;
            border-radius: .2em;
          }
    </style>
</head>

<body>

	<div class="wrapper">
	    <div class="sidebar" data-color="blue" data-image="../assets/img/sidebar-1.jpg">
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
                                        <li class="active">
                                            <a href="audio_upload.php">
                                                <i class="material-icons text-gray" style=color:"#ff0000;">library_music</i>
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
<!--Category Update-->
	        <div class="content">
	            <div class="container-fluid">
	                <div class="row">
	                    <div class="col-md-12">
                                <!--category work-->
                                <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Add New Audio Categories</h4>
                                            <p class="category"> Enter New Artist, Genres, Year into Database </p>
	                            </div>
                                    
	                            <div class="card-content">
                                        <form method="post" enctype="multipart/form-data" action="artist.php">
                                            <div class="col-md-12 ">
                                                <div class="col-sm-4">
                                                    <div class="form-group label-floating ">
                                                            <label class="control-label">Enter Artist Category</label>
                                                            <input type="text" class="form-control" name="artist" required>
                                                    </div>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="control-label">Upload Artist photo</label>
                                                    <input type="file" name="apic" value="Upload artist pic" required>
                                                </div>
                                                <div class="col-sm-4">
                                                    <label class="control-label">Upload Artist cover</label>
                                                    <input type="file" name="acvr" value="Upload Cover" required>
                                                </div>
                                                <div class="col-sm-12">
                                                    <div class="form-group label-floating ">
                                                            <label class="control-label">Enter Artist Details</label>
                                                            <input type="text" class="form-control" name="adetails" required>
                                                    </div>
                                                </div>
                                                
                                                <input type="submit" class="btn btn-primary pull-right" name="artist_n">
                                            </div>
                                        </form>
                                        <form method="post" enctype="multipart/form-data" action="genre.php">
                                            <div class="col-md-12 ">
                                                <div class="form-group label-floating">
                                                        <label class="control-label">Enter Genre Category</label>
                                                        <input type="text" class="form-control" name="genre">
                                                        <input type="submit" class="btn btn-primary pull-right" name="genre_n">
                                                </div>
                                            </div>
                                        </form>
                                        <form method="post" enctype="multipart/form-data" action="year.php">
                                            <div class="col-md-12 ">
                                                <div class="form-group label-floating">
                                                        <label class="control-label">Enter Year Category</label>
                                                        <input type="text" class="form-control" name="year" >
                                                        <input type="submit" class="btn btn-primary pull-right" name="year_n">
                                                </div>
                                            </div>
                                        </form>
 </div>
                                        
	                        </div>
                                <!--audio upload-->
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Upload New Audio </h4>
					<p class="category">Manage All Your Audio</p>
	                            </div>
	                            <div class="card-content">
	                                <form method="post" enctype="multipart/form-data">
                                            
                                                <div class=" col-md-4" style="padding-left: 7px;">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Enter Album Name</label>
                                                            <input type="text" class="form-control" name="album" required>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="artist" >
                                                          
                                                        <option value="">~Select Artist~</option><?php 
                                                          $sq="select * from artist ORDER BY artist";
                                                          $q= mysqli_query($con, $sq);
                                                         while( $f= mysqli_fetch_assoc($q)){
                                                          ?>  
                                                        <option value="<?php echo $f['artist']; ?>"><?php echo $f['artist']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="year" >
                                                        <option value="">~Select Year~</option>  
                                                        <?php 
                                                          $sy="select * from year ORDER BY year";
                                                          $y= mysqli_query($con, $sy);
                                                         while( $f= mysqli_fetch_assoc($y)){
                                                          ?>  
                                                        <option value="<?php echo $f['year']; ?>"><?php echo $f['year']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="genre" >
                                                        <option value="">~Select Genre~</option>  
                                                        <?php 
                                                          $sg="select * from genre ORDER BY genre";
                                                          $g= mysqli_query($con, $sg);
                                                         while( $f= mysqli_fetch_assoc($g)){
                                                          ?>  
                                                        <option value="<?php echo $f['genre']; ?>"><?php echo $f['genre']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label">Upload Album Cover</label>
                                                    <input type="file" name="cvr" value="Upload Cover" required>
                                                </div>
                                                <div class="col-md-4">
                                                     <label class="control-label">Upload Corresponding Song</label>
                                                     <input type="file" name="m" value="Upload Songs" required>
                                                </div>
                                            
                                            <div>
                                                <input type="submit" class="btn btn-primary pull-right" name="submit1">
                                            </div>
                                        </form>

	                            </div>
	                        </div>
                                <!--album audio upload-->
	                        <div class="card">
	                            <div class="card-header" data-background-color="blue">
	                                <h4 class="title">Upload Album Audio </h4>
					<p class="category">Upload New Album which may contain Many Audio Files</p>
	                            </div>
	                            <div class="card-content">
                                        <?php
//include '../../include/connect.php';
if(isset($_FILES['files'])){
    $name=$_POST['name'];
    $artist=$_POST['artist'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    move_uploaded_file($_FILES['f1']['tmp_name'],"image/".$_FILES['f1']['name']);
    $img=$_FILES['f1']['name'];
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
       // if($file_size > 2097152){
			//$errors[]='File size must be less than 2 MB';
       // }		
       echo  $query="INSERT into upload_multiple (`name`,`cover`,`artist`,`genre`,`year`,`FILE_NAME`,`FILE_SIZE`,`FILE_TYPE`) VALUES('$name','$img','$artist','$genre','$year','$file_name','$file_size','$file_type'); ";
        $desired_dir="user_data";
        if(empty($errors)==true){
            if(is_dir($desired_dir)==false){
                mkdir("$desired_dir", 0700);		// Create directory if it does not exist
            }
            if(is_dir("$desired_dir/".$file_name)==false){
                move_uploaded_file($file_tmp,"$desired_dir/".$file_name);
            }else{									// rename the file if another one exist
                $new_dir="$desired_dir/".$file_name.time();
                 rename($file_tmp,$new_dir) ;				
            }
		 mysqli_query($con,$query);			
        }else{
                print_r($errors);
        }
    }
	if(empty($error)){
		echo "Multiple Files Uploaded";
	}
}
?>
                                            <form method="post" enctype="multipart/form-data" action="c1.php">
                                            
                                                <div class=" col-md-4" style="padding-left: 7px;">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Enter Album Name</label>
                                                            <input type="text" class="form-control" name="album" required>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="artist" >
                                                          
                                                        <option value="">~Select Artist~</option><?php 
                                                          $sq="select * from artist ORDER BY artist";
                                                          $q= mysqli_query($con, $sq);
                                                         while( $f= mysqli_fetch_assoc($q)){
                                                          ?>  
                                                        <option value="<?php echo $f['artist']; ?>"><?php echo $f['artist']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="year" >
                                                        <option value="">~Select Year~</option>  
                                                        <?php 
                                                          $sy="select * from year ORDER BY year";
                                                          $y= mysqli_query($con, $sy);
                                                         while( $f= mysqli_fetch_assoc($y)){
                                                          ?>  
                                                        <option value="<?php echo $f['year']; ?>"><?php echo $f['year']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="genre" >
                                                        <option value="">~Select Genre~</option>  
                                                        <?php 
                                                          $sg="select * from genre ORDER BY genre";
                                                          $g= mysqli_query($con, $sg);
                                                         while( $f= mysqli_fetch_assoc($g)){
                                                          ?>  
                                                        <option value="<?php echo $f['genre']; ?>"><?php echo $f['genre']; ?></option>
                                                        <?php
                                                             }
                                                             ?>
                                                    </select>
                                                </div>
                                                <div class="col-md-4">
                                                    <label class="control-label">Upload Album Cover</label>
                                                    <input type="file" name="f1" value="Upload Cover" required>
                                                </div>
                                                <div class="col-md-4">
                                                     <label class="control-label">Upload Corresponding Songs</label>
                                                     <input type="file" name="files[]" value="Upload Songs" multiple required>
                                                </div>
                                            
                                            <div>
                                                <input type="submit" class="btn btn-primary pull-right">
                                            </div>
                                        </form>

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
	<script src="../assets/js/material-dashboard.js"></script>

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
<?php
    
if(isset($_POST['submit1'])){
    $album_n=$_POST['album'];
    $artist_n=$_POST['artist'];
    $launch=$_POST['year'];
    $genre=$_POST['genre'];
    //cover work
    move_uploaded_file($_FILES['cvr']['tmp_name'], "../../music/cvr/".$_FILES['cvr']['name']);
    $music_cover=$_FILES['cvr']['name'];
    //song work
    move_uploaded_file($_FILES['m']['tmp_name'], "../../music/songs/".$_FILES['m']['name']);
    $music_file=$_FILES['m']['name'];
    //query
   $audio_upl="INSERT INTO audio(album,artist,year,genre,cover,audio)values('$album_n','$artist_n','$launch','$genre','$music_cover','$music_file')";
    //echo $aud_upl;
    $upload=mysqli_query($con,$audio_upl);
    
    if  ($upload)
        {
         echo"<script type='text/javascript'>alert('Songs Uploaded Successfully')</script>";
        }
    else 
        {
            echo"<script type='text/javascript'>alert('Songs Upload gone Wrong')</script>";
        }
}

?>