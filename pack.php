<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WeBee  |  Package Description</title>
	
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
                         <li ><a href="myprofile.php">My Profile</a></li>
                         <li><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
    </header>
  </head>
  <body>
  

    
	  
   <div class="prodetail">
<?php
             
			  
          $db = mysqli_connect('localhost', 'root', '', 'webee');
             
             if(isset($_GET['product_id']))	{
				$pro_id = $_GET['product_id'];
			 	 
	         $sql = "SELECT * FROM postdata WHERE product_id='$pro_id'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	         if($row != ""){ 
             	 
	  	 
			 $pro_id = $row['product_id'];
			  $proname = $row['proname'];
			   $category = $row['images'];
	          $price = $row['price'];
			  $text = $row['text'];
			 }
	         
	        
		       echo "<div id='xop-bot'>";
			   	  echo "<h3>Store Name: ".$row['username']."</h3>";
			   	
               echo "<img src='postimg/".$row['images']."' >";
			   
			   echo " <p>Product Name: " .$row['proname']. "</p>";
	           echo "<p>Category: ".$row['category']."</p>";
	           echo "<p>Price: ".$row['price']."</p>";
               	echo "<p>About Product: ".$row['text']."</p>"; 
                	
		       echo "</div>";
			   
			   	
             }
			 }			 
	
?>	
</div>

	  
  </body>
  </html>