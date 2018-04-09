<?php
	 
	 $db = mysqli_connect('localhost', 'root', '', 'webee');
	 
	 $sql = "DELETE FROM users username='$username', address='$address', country='$country' WHERE id='$_GET[id]'";

      
	 
	  if(mysqli_query($db, $sql)){
	  
	        header('Location: myprofile.php'); 
      }
	  

?>