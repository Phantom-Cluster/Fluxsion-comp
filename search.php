 <?php 
                     include 'include/connect.php';                   
                if(isset($_POST['search']))
                                        {
                                            $s=$_POST['search'];
                                            $qry=mysqli_query($con,"select * from upload_video where title LIKE '%$s%' ");
                                            
                                        }
                                        
                                        
                                        
                                        ?>


<?php

while ($f= mysqli_fetch_assoc($qry))
          {
    ?>
<video width="100px" height="100px" class="vidthumb" controls>
     <source src="v/<?php echo $f['file']?>" type="video/mp4">
  </video>
<?php } ?>
 
                                                
                                            
                                            