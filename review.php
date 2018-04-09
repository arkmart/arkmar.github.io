<?php include('server.php'); ?>

<?php 

   
   
   if(isset($_POST['comments'])) {
	   
	  $username = $_POST['username'];
	  $email = $_POST['email'];
	  $comment = $_POST['comment'];
	  
	   
	  
 
      $db = mysqli_connect("localhost", "root", "", "webee");
   
      $username = $_POST['username'];
	  $email = $_POST['email'];
	  $comment = $_POST['comment'];
	
      
	  
   
      $sql = "INSERT INTO review (username, email, comment) VALUES ('$username', '$email', '$comment')";
	  mysqli_query($db, $sql);
	  
   
     
   }


?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WeBee  |   Review</title>

    <link rel="stylesheet" href="./css/style.css">
	
    <header>
      <div class="cont">
          <div id="branding">
              <h1><span class="highlight">WeBee</span></h1>
          </div>
          <nav>
                    <ul>
                         <li ><a  href="deal.php">Deals</a></li>
                         <li ><a  href="login.php">LogIn</a></li>
                         <li ><a  href="about.php">About</a></li>
						 <li ><a  href="registerme.php">Register As Seller</a></li>
                      
                         
                    </ul>
          </nav>
    </header>



  </head>
  <body>
  <title><?php echo $username; ?>s Profile</title>
         
 

	
		
		
		<div id="revie">
		<h3>Please Submit Your Review About This Shop</h3><br>
		<div class="reviews">
		<form action="review.php" method="post">
              <label>Shop Name</label>
              <input type="text" name="username" value="<?php echo $username; ?>"><br>
              <label>Your Email</label>
              <input type="text" name="email"><br/>
              <label>Comment</label>
              <textarea class="form-control" name="comment" rows="2" cols="40" placeholder="Write your comment......"></textarea><br>
			  <button type="submit" name="comments" class="btn">Submit</button>
          </form>
		  </div>
		  </div>

<div class="revi">
<?php

   
    $db = mysqli_connect('localhost', 'root', '', 'webee');
      
	  $sql = "SELECT * FROM review WHERE username='$username'";
	  $result = mysqli_query($db, $sql);
	   while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	  /*if($row !=""){
		$username = $row['username'];
		$email = $row['email'];
		$comment = $row['comment'];
		
        	
	  }*/
		    echo "<div id='com_div'>"; 
            echo "<p>".$row['username']."</p>";
			echo "<p>".$row['email']."</p>";
	           echo "<p>".$row['comment']."</p>";
	           			
		        echo "</div>";
	   }
		
	
?>

 </div>



</body>
</html>

