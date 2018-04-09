



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description"  content="affordable products">
    <meta name="author"  content="Arafat Khan">
    <title>ARKMART  |  Deals</title>
	
	<link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/style.css" rel="stylesheet">
    
	
  </head>
  <body>
  
  <section class="wrrapNavbar">
<nav class="navbar navbar-default">
  <div class="container">
    <!-- Brand and toggle get grouped for better mobile display -->
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="#">ARK<span>MART </span></a>
    </div>

    <!-- Collect the nav links, forms, and other content for toggling -->
    <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
      <ul class="nav navbar-nav navbar-right">
        <li  class="current"><a  href="deal.php">Deals</a></li>
                         <li ><a  href="login.php">LogIn</a></li>
                         <li ><a  href="about.php">About</a></li>
						 <li ><a  href="registerme.php">Register As Seller</a></li>
        <li><a href="#contact">Contact</a></li>
      </ul>
    </div><!-- /.navbar-collapse -->
  </div><!-- /.container-fluid -->
</nav>
</section>






<div id="home" class="firstSection">
  <section class="sideNavbar">
  <nav class="navbar navbar-default">
    <div class="container">
      <!-- Brand and toggle get grouped for better mobile display -->
      <div class="navbar-header">
        <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
          <span class="sr-only">Toggle navigation</span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
          <span class="icon-bar"></span>
        </button>
        <a class="navbar-brand" href="#">ARK<span>MART </span></a>
      </div>

      <!-- Collect the nav links, forms, and other content for toggling -->
      <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
        <ul class="nav navbar-nav navbar-right">
          <li  class="current"><a  href="deal.php">Deals</a></li>
                         <li ><a  href="login.php">LogIn</a></li>
                         <li ><a  href="about.php">About</a></li>
						 <li ><a  href="registerme.php">Register As Seller</a></li>
          <li><a href="#contact">Contact</a></li>
        </ul>
      </div><!-- /.navbar-collapse -->
    </div><!-- /.container-fluid -->
  </nav>
  </section>
</div>
   

	 <form action="search.php" method="post"> 
    <div class="create-search-button">
    <label>Search By Category</label><br>
	
    <input type="text"  name="search"/>
    <input type="submit"  name="submit"  value="Search"/>
	
	
    </div>
	</form>
    <div class="filter-button">
    <label>Filter(IN-TAKA)</label><br>
    <input type="number" name="filter-button"/>
    </div>
    <section id="boxes">

    </section>
	
	<div class="searchpro"> 
  <form action="pro.php" method="GET">
  <h2>Serach for the<br/> Store below:</h2>
     <table>
	   <tr><td>Store Name:</td><td><input type="text" id="username" name="username"></td></tr>
	   <tr><td><input type="submit" id="submit" value="View Profile"></td></tr>
	 </table>
  </form>
       </div> 
	<section id="portfolio">

   
	<div class="deals">
	    <h3>DEALS</h3>

<div class="xop-section">
  <ul class="xop-grid">
    
  <div class="xop-img-1">
     
<?php
          
	          
			  
             $db = mysqli_connect('localhost', 'root', '', 'webee');
            
	         $sql = "SELECT * FROM postdata";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				 
				 
	           if($row != ""){
	          
		       echo "<div id='xop-box'>";
			   
			  
			   	echo "<p><a href=pro.php?username=".$row['username'].">".$row['username']." </a> </p>"; 
               echo "<img src='postimg/".$row['images']."' >";
			    echo "<a href=contract.php?product_id=".$row['product_id']."> Order</a>";	
	          
	           echo "<p>Price: ".$row['price']."</p>";
               
		       echo "</div>";
			   
			  
             
             }
             }			 
	
?>	
	</div>
	
	 </ul>

</div>
	</div>
	
	 
	
  </body>
</html>
