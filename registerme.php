<?php include('server.php'); ?>
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
			<li ><a href="about.php">About</a></li>
			<li class="current"><a  href="registerme.php">Register As Seller</a></li>
			<li ><a  href="inv.php">Be An Investor</a></li>
         </ul>
        </nav>
	 </header>	
		
		
		<div id="regi">
     <div class="ban">
	     <h2>Register</h2> 
	 </div>
	 <div class="regis">
	 <form method="post" action="registerme.php">
	 
	      <?php include('errors.php'); ?>
          <div class="input-group">
              <label>Store Name</label>
              <input type="text" name="username" value="<?php echo $username; ?>">
          </div>
     	
	      <div class="input-group">
              <label>Email</label>
              <input type="text" name="email" value="<?php echo $email; ?>">
          </div>
          <div class="input-group">
              <label>Admin Name</label>
              <input type="text" name="adminname">
          </div>
          <div class="input-group">
              <label>Address</label>
              <input type="text" name="address">
          </div>
          <div class="input-group">
              <label>Country</label>
              <input type="text" name="country">
          </div>		  
          <div class="input-group">
              <label>Password</label>
              <input type="password" name="password_1">
          </div>	
          <div class="input-group">
              <label>Confirm Password</label>
              <input type="password" name="password_2">
          </div>	
          <div class="input-group">
              <button type="submit" name="register" class="btn">Register</button>
          </div>
		  <div class="ota">
		  
		  <p>
		  Already a Member? <a href="login.php">LogIn</a>
		  </p>
		  </div>
		  </div>
     </form>	 
     </div>
	 </body>
	 </html>