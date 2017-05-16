<?php
include '../../include/connect.php';
if(isset($_FILES['multiple'])){
    $album_n=$_POST['album'];
    $artist_n=$_POST['artist'];
    $launch=$_POST['year'];
    $genre=$_POST['genre'];
    //cover work
    move_uploaded_file($_FILES['cvr']['tmp_name'], "../../music/cvr/".$_FILES['cvr']['name']);
    $music_cover=$_FILES['cvr']['name'];
    $errors= array();
	foreach($_FILES['files']['tmp_name'] as $key => $tmp_name ){
		$file_name = $_FILES['files']['name'][$key];
		$file_size =$_FILES['files']['size'][$key];
		$file_tmp =$_FILES['files']['tmp_name'][$key];
		$file_type=$_FILES['files']['type'][$key];	
       // if($file_size > 2097152){
			//$errors[]='File size must be less than 2 MB';
       // }		
        $query="INSERT into multiple_file (`album`,`artist`,`FILE_NAME`,`launch`,`genre`,`cvr`) VALUES('$album_n','$artist_n','$file_name','$launch','$genre','$music_cover'); ";
        $desired_dir="../../music/songs/";
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
}
?>

