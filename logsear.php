<?php
 /*include('server.php');
 
 $msg="";
 
 if(!empty($_POST['login'])){
	 $query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
	 $result = mysqli_query($db, $query);
	 if(is_array($result)){
		 $_SESSION['username'] = $row['username'];
	 }else{
		 $msg = "Invalid Store Name/Password";
	 }
 }

?>