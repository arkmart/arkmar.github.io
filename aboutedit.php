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
                         <li ><a  href="invpost.php">Invests</a></li>
                         <li class="current"><a href="myprofile.php">My Profile</a></li>
                         <li><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
		  </div>
    </header>
  </head>
<body>
  
 
<div class="aboutcom1">
     
<?php
    
	  $db = mysqli_connect('localhost', 'root', '', 'webee');
	  
	 if(isset($_GET['id'])){
	 
	  $sql = "SELECT * FROM users WHERE id='$_GET[id]' ";
	  $result = mysqli_query($db, $sql);
	 
	  while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
	  
		 
	   
	    $id = $row['id'];
		$username = $row['username'];
        $adminname = $row['adminname'];
        $address = $row['address'];
        $country = $row['country'];		
		 }	  
	
	 }
		 if(isset($_POST['update'])){
	   
	
		
		
		$username = $_POST['username'];
        $adminname = $_POST['adminname'];
        $address = $_POST['address'];
        $country = $_POST['country'];		
		 }
	  
$sql = "UPDATE users SET username='$username', address='$address', country='$country' WHERE id='$.row[id].' "; 
if(mysqli_query($db, $sql)){
	echo "updated";
}

	       

		  
?> 



	 
 <table>
    
	<tr><td>Username:</td><td><?php echo $username; ?></td></tr>
	<tr><td>Admin Name:</td><td><?php echo $adminname; ?></td></tr>
	<tr><td>Address:</td><td><?php echo $address; ?></td></tr>
	<tr><td>Country:</td><td><?php echo $country; ?></td></tr>
	
    </form>	
 </table>	
   
      
	  
 </div>    

	  
	     

	 

 <div id="regi">
     <div class="ban">
	     <h2>Update</h2> 
	 </div>
	 <div class="regis">
		      
			    <form action="aboutedit.php?" method="post">
				
				 <div class="input-group">
				 <label>Store Name</label>
			   	<input type="text" name="username"  value="<?php echo $username; ?>">
				</div>
				 <div class="input-group">
				 <label>Admin Name</label>
				 <input type="text" name="adminname" value="<?php echo $adminname; ?>">
				 </div>
				  <div class="input-group">
				  <label>Address</label>
			   <input type="text" name="address" value="<?php echo $address; ?>">
			   </div>
			    <div class="input-group">
				<label>Country Name</label>
				<input type="text" name="country" value="<?php echo $country; ?>">
				</div>
				
			<input type="hidden" name="id" value="<?php echo $id; ?>">
			
			 
             <input type="submit" name="update" class="btn1" value="UPDATE">
			 
				</form>
				
				</div>
				
		       </div>


      
  
  </body>
  </html>
  
  
