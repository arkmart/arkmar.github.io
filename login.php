<?php include('server.php'); ?>
 
<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="affordable products">
    <meta name="keywords"  content="WeBee">
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
		    <li class="current"><a  href="login.php">LogIn</a></li>
            <li ><a  href="about.php">About</a></li>
			<li ><a  href="registerme.php">Register As Seller</a></li>
			<li ><a  href="inv.php">Be An Investor</a></li>
         </ul>
        </nav>
		
	 
	 
	 
	 
	 
	 </header>
  
             <div id="login">
			 <div class="ban">
	           <h3>Log-In</h3> 
	         </div>
			 <div class ="logi">
			 <form method="post" action="login.php">
			
	         <?php include('errors.php'); ?>
             <div class="input-group">
             <label>Store Name</label>
             <input type="text" name="username">
             </div>
     	     <div class="input-group">
             <label>Password</label>
             <input type="password" name="password">
             </div>		
             <div class="input-group">
             <button type="submit" name="login" class="btn1">Login</button>
             </div>
			 <div class="nota">
             <p>
	          Not a Member? <a href="registerme.php">Register</a>
	         </p>
			 </div>
             </form>
			 </div>
			 
	         </div>
			 
		
  
             
	 
	
  </body>
</html>
