<?php include('server.php'); ?>

<?php 
  
  
   
   if(isset($_POST['payment'])) {
	  
	  
	   
	   $paynom = $_POST['pyno'];
	   $trid = $_POST['transid'];
	   $mob = $_POST['mobil'];
	   
	  
	  
	 
   
     
   
   
      $db = mysqli_connect("localhost", "root", "", "webee");
   
      
	  
   
      $sql = "INSERT INTO paydata (pyno, transid, mobil) VALUES ('$paynom', '$trid', '$mob')";
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
  

      <div class="payd">
      <form action="pay.php" method="post">
	    <h2>Pay Via Rocket Account</h2>
		
	    
	     
          <div class="input-group">
              <label>Enter Your Rocket Account No.</label>
              <input type="text" name="pyno">
          </div>	
          <div class="input-group">
              <label>Translocation ID</label>
              <input type="text" name="transid">
          </div>		  
          
		  <div class="input-group">
              <label>Your Phone No</label>
              <input type="text" name="mobil">
          </div>
          <div class="input-group">
              <button type="submit" name="payment" class="btn">Submit</button>
          </div>
      </form>
      </div>
	  <div class="productdetail">
<?php
             
	          $db = mysqli_connect('localhost', 'root', '', 'webee');
             
             if(isset($_GET['dealsdata']))	{
				$ord_id = $_GET['order_id'];
			 	 
	         $sql = "SELECT * FROM dealdata WHERE order_id='$ord_id'";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
	         if($row != ""){ 
             	 
	  	 
			 $ord_id = $row['order_id'];
			  $amount = $row['amount'];
			   $price = $row['price'];
	          $address = $row['address'];
			 }
	          echo "<div id='pay_div'>"; 
           
			   echo "<p>Product Quanttity: ".$row['amount']."</p>";
			   echo "<p>Price: ".$row['price']."</p>";
	           echo "<p>Delivery Address: ".$row['address']."</p>";
              	 			
		        echo "</div>";
	        
             }
			 }			 		  
         
	
?>	


 
</div>


	  
  </body>
  </html>