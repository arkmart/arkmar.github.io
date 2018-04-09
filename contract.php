
<?php 
  
   
   if(isset($_POST['dealsdata'])) {
	  
	 
       
	    $email = $_POST['email'];
		$username = $_POST['username'];
		$proname = $_POST['proname'];
	   $amount = $_POST['amount'];
	   $price = $_POST['price'];
	   $address = $_POST['address'];
	   $paynom = $_POST['paynom'];
	   $trid = $_POST['trid'];
	   $mob = $_POST['mob'];
	   
	  
	  
	 
   
     
   
   
      $db = mysqli_connect("localhost", "root", "", "webee");
   
      
	  
   
      $sql = "INSERT INTO dealdata (email, username, proname, amount, price, address, pyno, transid, mobil) VALUES ('$email', '$username', '$proname', '$amount', '$price', '$address', '$paynom', '$trid', '$mob')";
	  mysqli_query($db, $sql); 
	 
   
   
   }
 

?>


<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>WeBee  |  Product Description</title>
	
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




      <div class="orderdet">
      <form action="contract.php" method="post">
	    <h2>Shopping Cart</h2>
		 <div class="input-group">
              <label>Email ID</label>
              <input type="text" name="email">
          </div>
		  <div class="input-group">
              <label>Store Name</label>
              <input type="text" name="username">
          </div>
		  <div class="input-group">
              <label>Product Name</label>
              <input type="text" name="proname">
          </div>
	    
          <div class="input-group">
              <label>Amount of Products</label>
              <input type="text" name="amount">
          </div>	
          <div class="input-group">
              <label>Total Price</label>
              <input type="text" name="price">
          </div>		  
          <div class="input-group">
              <label>Address for Delivery</label>
              <input type="text" name="address" >
          </div>	
		  <div class="input-group">
		  <label>Enter Your Rocket Account No.</label>
              <input type="text" name="paynom">
          </div>	
          <div class="input-group">
              <label>Translocation ID</label>
              <input type="text" name="trid">
          </div>		  
          
		  <div class="input-group">
              <label>Your Phone No</label>
              <input type="text" name="mob">
          </div>
          
          <div class="input-group">
              <button type="submit" name="dealsdata" class="btn">Submit</button>
          </div>
      </form>
      </div>
	  
	  

  </body>
  </html>