<?php
include '../../include/connect.php';
if(isset($_FILES['files'])){
    $name=$_POST['album'];
    $artist=$_POST['artist'];
    $genre=$_POST['genre'];
    $year=$_POST['year'];
    move_uploaded_file($_FILES['f1']['tmp_name'],"image/".$_FILES['f1']['name']);
    $img=$_FILES['f1']['name'];
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $key.$_FILES['files']['name'][$key];
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
		echo "Success";
	}
        header('location:audio_upload.php');
}
?>
<!--<html><body>
<form method="post" enctype="multipart/form-data" >
                                            
                                                <div class=" col-md-4" style="padding-left: 7px;">
                                                    <div class="form-group label-floating">
                                                            <label class="control-label">Enter Album Name</label>
                                                            <input type="text" class="form-control" name="name" required>
                                                    </div>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="artist" >
                                                          
                                                        <option value="">~Select Artist~</option>
                                                            <option value="12">Artist</option>
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="year" >
                                                        <option value="">~Select Year~</option>  
                                                         <option value="112">123</option> 
                                                    
                                                    </select>
                                                </div>
                                                <div class=" col-md-4">
                                                    <select class="form-control" id="category"  required name="genre" >
                                                        <option value="">~Select Genre~</option>  
                                                        <option value="112">Genre</option>  
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
    </body>
</html>-->



