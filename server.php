<?php
   
    session_start();
	
    $username = "";
    $email = "";
	$adminname = "";
	$address = "";
	$country = "";
	
	$errors = array();



    $db = mysqli_connect('localhost', 'root', '', 'webee');

	
	if (isset($_POST['register'])){
		$username = mysql_real_escape_string($_POST['username']);
		$email = mysql_real_escape_string($_POST['email']);
		$adminname = mysql_real_escape_string($_POST['adminname']);
		$address = mysql_real_escape_string($_POST['address']);
		$country = mysql_real_escape_string($_POST['country']);
		$password_1 = mysql_real_escape_string($_POST['password_1']);
		$password_2 = mysql_real_escape_string($_POST['password_2']);
		
		
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		
		if (empty($email)){
			array_push($errors, "Email is required");
		}
		
		if (empty($adminname)){
			array_push($errors, "Admin Name is required");
		}
		
		if (empty($address)){
			array_push($errors, "Address is required");
		}
		
		if (empty($country)){
			array_push($errors, "Country is required");
		}
		
		if (empty($password_1)){
			array_push($errors, "password is required");
		}
		
		if ($password_1 != $password_2){
			array_push($errors, "The two passwords do not match");
		}
		
		
		if (count($errors) == 0){
			$password = md5($password_1);
			
			$sql = "INSERT INTO users (username, email, adminname, address, country, password) VALUES ('$username', '$email', '$adminname', '$address', '$country', '$password')";
			mysqli_query($db, $sql);
			$_SESSION['username'] = $username;
			
			$_SESSION['success'] = "You are now logged in";
			header('location: myprofile.php'); 
		}
		
	}
	
	
	if (isset($_POST['login'])) {
		$username = mysql_real_escape_string($_POST['username']);
		$password = mysql_real_escape_string($_POST['password']);	
		
		if (empty($username)){
			array_push($errors, "Username is required");
		}
		
		if (empty($password)){
			array_push($errors, "Password is required");
		}
		
		 if (count($errors) == 0 ) {
			$password = md5($password);
			$query = "SELECT * FROM users WHERE username='$username' AND password='$password'";
			$result = mysqli_query($db, $query);
			if (mysqli_num_rows($result) == 0 ) {
			    
				
		        $_SESSION['username'] = $username;
              
			    $_SESSION['success'] = "You are now logged in";
			    header('location: myprofile.php');
			}
			
			else{
				array_push($errors, "wrong username/password combination");
				header('location: login.php');
			}	
		
	    }
	
	}
	 
	
	if (isset($_GET['logout'])) {
		session_destroy();
		unset($_SESSION['username']);
		header('location: login.php');
	}

	
?>