<?php include('server.php'); ?>

<?php 
   $msg = "";
   
   
   if(isset($_POST['invpostsdata'])) {
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
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="affordable products">
    <meta name="keywords"  content="webee">
    <meta name="author"  content="Arafat Khan">
    <title>Bizness2Day  |  Welcome</title>
    <link rel="stylesheet" href="./css/style.css">
	  
  </head>
  <body>
     <header>
        <div class="container">
            <div id="branding">
                <h1><span class="highlight">Bizness2Day</span></h1>
            </div>
		</div>
		
		<nav>
         <ul>
		                 <li ><a  href="deal.php">Deals</a></li>
                         <li ><a  href="login.php">LogIn</a></li>
                         <li ><a  href="about.php">About</a></li>
						 <li ><a  href="registerme.php">Register As Seller</a></li>
						
                          <li  class="current"><a  href="inv.php">Be An Investor</a></li>
                         
                    </ul>
         </ul>
        </nav>
	 </header>	
		
		
		<div class="product">
        <form method="post" action="invost.php" enctype="multipart/form-data">
		<input type="hidden" name="size" value="1000000">
		<h1> Be An Investor<h1>
		<div>
		<label>Write It</label><br>
		<textarea class="form-control" name="Name" rows="1" cols="70" placeholder="Your Full Name......"></textarea><br>
		<textarea class="form-control" name="Email Id" rows="1" cols="70" placeholder="Your Email Id...."></textarea><br>
		<textarea class="form-control" name="Category" rows="1" cols="70" placeholder="Type Of Buisness....."></textarea><br>
		<textarea class="form-control" name="About" rows="1" cols="70" placeholder="Say Something About You....."></textarea><br>
		<textarea class="form-control" name="text" rows="5" cols="70" placeholder="Say something about your previous invest experiance..."></textarea><br>
		</div>
		<label>Select An Image</label><br>
		<input type="file" name="image"><br>
        <input type="submit" name="invpostsdata" value="Submit">
		</form>
		
		</div>
		  </div>
		  </div>
     </form>	 
     </div>
	 
	 <div class="invests">
	    <h3>INVESTS</h3>

<?php           
			  
        $db = mysqli_connect('localhost', 'root', '', 'webee');
             
             			 
	         $sql = "SELECT * FROM postdata";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	         
		       echo "<div id='invpost_div'>";
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