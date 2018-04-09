<?php include('server.php');

    if(empty($_SESSION['username'])) {
	   header('location: login.php');
	}
?>




<?php 
  $msg = "";
   
   
   if(isset($_POST['upload'])) {
   
      $target = "images/".basename($_FILES['images']['name']);
   
   
      $db = mysqli_connect("localhost", "root", "", "webee");
   
      $username = $_SESSION['username'];
      $images = $_FILES['images']['name'];
	  
   
      $sql = "INSERT INTO photos (username, images) VALUES ('$username', '$images')";
	  mysqli_query($db, $sql);
	  
   
      if (move_uploaded_file($_FILES['images']['tmp_name'], $target)) {
	     $msg = "Image uploaded successfully";
	  }else{
	      $msg = "There was a problem to upload";
	  }
   }
?>



<?php 
   $msg = "";
   
   
   if(isset($_POST['postsdata'])) {
	   if($_FILES['image'] !="") {
	   
	   $image = $_FILES['image']['name'];
	   $proname = $_POST['proname'];
	   $category = $_POST['category'];
	   $price = $_POST['price'];
	   $text = $_POST['text'];
	  
   
      $target = "postimg/".basename($_FILES['image']['name']);
   
   
      $db = mysqli_connect("localhost", "root", "", "webee");
   
      $username = $_SESSION['username'];
	  $proname = $_POST['proname'];
	  $category = $_POST['category'];
	  $price = $_POST['price'];
	  $text = $_POST['text'];
      $image = $_FILES['image']['name'];
	  
   
      $sql = "INSERT INTO postdata (username, proname, category, price, text, images) VALUES ('$username', '$proname', '$category', '$price', '$text', '$image')";
	  mysqli_query($db, $sql);
	  
   
      if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
	     $msg = "Image uploaded successfully";
	  }else{
	      $msg = "There was a problem to upload";
	  
	  
	  }
	  
	  
	   }
   
   
   }


?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Bizness2Day  |  My Profile</title>

    <link rel="stylesheet" href="./css/style.css">
    <header>
      <div class="cont">
          <div id="branding">
              <h1><span class="highlight">Bizness2Day</span></h1>
          </div>
          <nav>
                    <ul>
                         <li ><a  href="deals.php">Deals</a></li>
                         <li ><a  href="invpost.php">Invests</a></li>
                         <li class="current"><a href="myprofile.php">My Profile</a></li>
                         <li><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
    </header>
  </head>
  <body>

    <div class="content">
         <?php if (isset($_SESSION['success'])): ?>
              <div class="error success">
			      <h3>
				     <?php
                         echo $_SESSION['success'];
						 unset($_SESSION['success']);
                     ?>
				  </h3>
			  </div>
         <?php endif  ?>

         <?php if (isset($_SESSION['username'])); ?>
             <p>Welcome <strong><?php echo $_SESSION['username']; ?></strong></p>
         


	 </div>
	   <div id="photo">
<?php

     

    $db = mysqli_connect('localhost', 'root', '', 'webee');
      $username = $_SESSION['username'];	  
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


	  
       <form action="myprofile.php" method="post" enctype="multipart/form-data">
	    <input type="hidden" name="size" value="1000000">   
		   <div>
		       <input type="file" name="images">
		   </div>
		   <div>
		       <input type="submit" name="upload" value="Upload Image">
		   </div>
	   </form>
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

<div class="aboutcom1">
     
<?php
    
	
	  
	  $db = mysqli_connect('localhost', 'root', '', 'webee');
	  $username = $_SESSION['username'];
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
      
	 
		  
?>



	 
 <table>
    
	<tr><td>Username:</td><td><?php echo $username; ?></td></tr>
	<tr><td>Admin Name:</td><td><?php echo $adminname; ?></td></tr>
	<tr><td>Address:</td><td><?php echo $address; ?></td></tr>
	<tr><td>Country:</td><td><?php echo $country; ?></td></tr>
	<tr><td><?php echo "<a href=aboutedit.php?id=".$row['id']."> Update</a><br>"; ?></tr></td>
	
    </form>	
 </table>

	 
</div>
     
	 
	 <div class="results">
		  <h3>Total Deals:</h3>
		  <h3>Transictions:</h3>
		</div>

		
		
		<div class="contract">
		  <h3>Orders</h3>
		  <a  href="dealorder.php">Click Here</a></li>
		</div>





		<div id="aboutpayment">
      <form action="myprofile.php" method="post">
	      <div class="input-group">
		      <h1>Please Complete<br>Payment</h1>
              <label>Product Delivered?</label>
              <input type="text" name="productrcvd">
          </div>

	      <div class="input-group">
              <label>Set Code</label>
              <input type="password" name="setcode">
          </div>
          <div class="input-group">
              <button type="submit" name="aboutpayment" class="btn">Submit</button>
          </div>
      </form>
      </div>

<div id="review">
		<h3>Please Reply About Your Shop</h3><br>
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

		<div class="product">
        <form method="post" action="myprofile.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<h1> Make A New Post<h1>
		<div>
		<label>Write Post</label><br>
		<textarea class="form-control" name="proname" rows="1" cols="70" placeholder="Product Name......"></textarea><br>
		<textarea class="form-control" name="price" rows="1" cols="70" placeholder="Product Price...."></textarea><br>
		<textarea class="form-control" name="category" rows="1" cols="70" placeholder="Product Category....."></textarea><br>
		<textarea class="form-control" name="text" rows="5" cols="70" placeholder="Say something about your product..."></textarea><br>
		</div>
		<label>Select An Image</label><br>
		<input type="file" name="image"><br>
        <input type="submit" name="postsdata" value="Submit">
		</form>
		
		</div>
		
<div class="posts">
<?php
             
			  
          $db = mysqli_connect('localhost', 'root', '', 'webee');
             $username = $_SESSION['username'];
             			 
	         $sql = "SELECT * FROM postdata WHERE username='$username'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	         if($row !=""){
		      $username = $row['username'];
			  $proname = $row['proname'];
	          $category = $row['category'];
	          $price = $row['price'];
			  $text = $row['text'];
              $image = $row['images'];	
			  
	         }
		       echo "<div id='deal_div'>";
			   	 echo "<h3>Store Name: ".$row['username']."</h3>";
			   	
               echo "<img src='postimg/".$row['images']."' >";
			   echo " <p>Product Name: " .$row['proname']. "</p>";
	           echo "<p>Category: ".$row['category']."</p>";
	           echo "<p>Price: ".$row['price']."</p>";
               	echo "<p>About Product: ".$row['text']."</p>";
				echo "<a href=edit.php?product_id=".$row['product_id']."> Update</a><br>";
              	echo "<a href=delete.php?product_id=".$row['product_id']."> Delete</a><br>";
                echo "<a href=pack.php?product_id=".$row['product_id'].">Buy Package To Get More Viewers</a><br>";				
		       echo "</div>";
                
			
	
             }			   
	
?>
            
</div>
		


		

  </body>
</html>
