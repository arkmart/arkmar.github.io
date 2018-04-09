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
               			
		       echo "</div>"; 
             }			   
	
?>	
</div>
		


		

  </body>
</html>
