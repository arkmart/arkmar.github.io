<?php include('server.php'); ?>




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
                         
                         <li ><a href="myprofile.php">My Profile</a></li>
                         <li><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
    </header>
  </head>
  <body>

  <div class="orders">
  <?php
             $db = mysqli_connect('localhost', 'root', '', 'webee');
			 
             $username = $_SESSION['username'];
		    
             $sql = "SELECT * FROM dealdata WHERE username='$username'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				 
				 
	           if($row != ""){
				 
				 $email = $row['email'];  
		         $username = $row['username'];
			     $proname = $row['proname'];
	          	 $amount = $row['amount'];
	             $price = $row['price'];
	             $address = $row['address'];
	             $paynom = $row['pyno'];
	             $trid = $row['transid'];
	             $mob = $row['mobil'];
			  
	       
			   }
	          
		       echo "<div id='xon-box'>";
			   
	           echo "<p>Email: ".$row['email']."</p>";
			   echo "<p>Product Name: ".$row['proname']."</p>";
			    echo "<p>Quanttity: ".$row['amount']."</p>";
				 echo "<p>Price: ".$row['price']."</p>";
				  echo "<p>Address: ".$row['address']."</p>";
				   echo "<p>Account no: ".$row['pyno']."</p>";
				    echo "<p>Translocation ID: ".$row['transid']."</p>";
					 echo "<p>Mobile No: ".$row['mobil']."</p>";
               
		       echo "</div>";
			   
			  
             
             }
             			 
     

   
	
?>

 </div>
 
 
  </body>
  </html>