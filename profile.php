<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bizness2Day  |   Profile</title>

    <link rel="stylesheet" href="./css/style.css">
	
    <header>
      <div class="cont">
          <div id="branding">
              <h1><span class="highlight">WeBee</span></h1>
          </div>
          <nav>
                    <ul>
                         <li ><a  href="deals.php">Deals</a></li>
                         <li ><a  href="invpost.php">Invests</a></li>
                         <li class="current"><a href="myprofile.php">My Store</a></li>
                         <li><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
    </header>



  </head>
  <body>
  <title><?php echo $username; ?>s Profile</title>
         


	 </div>
	   <div id="photo">
<?php

     

     $db = mysqli_connect('localhost', 'root', '', 'webee');
      $username = $_GET['username'];	  
	  $sql = "SELECT * FROM photos WHERE username='$username'";
	  $result = mysqli_query($db, $sql);
	  $row = mysqli_fetch_array($result);
	  
	  if($row !=""){
		$username = $row['username'];
        $images = $row['images'];	
	  }
		echo "<div id='img_div'>";
            echo "<img src='images/".$row['images']."' >";				
		echo "</div>";  	  
	
?>

       </div>
	   
	   
	     
	   
	  <div class="searchpro">

  <form action="profile.php" method="GET">
  <h2>Serach for the<br/> Store below:</h2>
     <table>
	   <tr><td>Store Name:</td><td><input type="text" id="username" name="username"></td></tr>
	   <tr><td><input type="submit" id="submit" value="View Profile"></td></tr>
	 </table>
  </form>
       </div> 
	  

<div class="aboutcom2">
<?php
    
if (isset($_GET['username'])) {
	 $username = $_GET['username'];
	 $db = mysqli_connect('localhost', 'root', '', 'webee');
	 $sql = "SELECT * FROM users WHERE username='$username'";

      $result = mysqli_query($db, $sql);
	 
	  while($row = mysqli_fetch_array($result)){
		  
		if($row != ""){
		
		$username = $row['username'];
        $adminname = $row['adminname'];
        $address = $row['address'];
        $country = $row['country'];		
	  }
	  }     
      }
		  
?>
	 
 <table>
	<tr><td>Username:</td><td><?php echo $username; ?></td></tr>
	<tr><td>Admin Name:</td><td><?php echo $adminname; ?></td></tr>
	<tr><td>Address:</td><td><?php echo $address; ?></td></tr>
	<tr><td>Country:</td><td><?php echo $country; ?></td></tr>
 </table>

	 
</div>

        <div class="resultspro">
		  <h3>Total Deals:</h3>
		  <h3>Transictions:</h3>
		</div>

		<div class="contracts">
		  <h3>Contract Form</h3>
		  <a  href="contract.php">Click Here</a></li>
		</div>


		
		
		
		 
		 
	<div id="review">
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


<div class="revik" >
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
	 
		 
		 
		 
		 
		
		
<div class="posts">
<?php
             
			  
             $db = mysqli_connect('localhost', 'root', '', 'webee');
             $username = $_GET['username'];
             			 
	         $sql = "SELECT * FROM postdata WHERE username='$username'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	         if($row !=""){
		      $username = $row['username'];
			  $text = $row['text'];
              $image = $row['images'];	
			  
	         }
		       echo "<div id='prof_div'>";
			  	echo "<h3>Store Name: ".$row['username']."</h3>";
			   	
               echo "<img src='postimg/".$row['images']."' >";
			   echo " <p>Product Name: " .$row['proname']. "</p>";
	           echo "<p>Category: ".$row['category']."</p>";
	           echo "<p>Price: ".$row['price']."</p>";
               	echo "<p>About Product: ".$row['text']."</p>";      
		       echo "</div>"; 
             }		   
	
?>	
</div>
		


	




		

  </body>
</html>
