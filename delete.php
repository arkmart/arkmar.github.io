<?php

  

	
	 $db = mysqli_connect('localhost', 'root', '', 'webee');
	 
	 $sql = "DELETE FROM postdata WHERE product_id='$_GET[product_id]'";

      
	 
	  if(mysqli_query($db, $sql)){
	  
	        header('Location: myprofile.php'); 
      }
	  

 
 
 
?>
