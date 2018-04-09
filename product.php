<?php include('server.php'); ?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WeBee  |   Profile</title>

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
			             <li ><a href="about.php">About</a></li>
			             <li ><a  href="registerme.php">Register As Seller</a></li>
                    </ul>
          </nav>
    </header>



  </head>
  <body>
  <div class="posts">
<?php
           
	        
			
          $db = mysqli_connect('localhost', 'root', '', 'webee');
            
             $proname = $_SESSION['proname'];		 
	         $sql = "SELECT * FROM postdata WHERE proname='$proname'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result)){
	  
	         /*if($row !=""){
		      $username = $row['username'];
			  $proname = $row['proname'];
			  $category = $row['category'];
			  $price = $row['price'];
			  $text = $row['text'];
              $image = $row['images'];	
			  
	         }*/
		       echo "<div id='post_div'>";
			   echo "<h3>".$row['username']."</h3>";
			   	
               echo "<img src='postimg/".$row['images']."' >";
			   echo "<p>".$row['proname']."</p>";
	           echo "<p>".$row['category']."</p>";
	           echo "<p>".$row['price']."</p>";
               echo "<p>".$row['text']."</p>";		   
		       echo "</div>"; 
          		   
			 }
?>	
</div>
  </body>
</html>