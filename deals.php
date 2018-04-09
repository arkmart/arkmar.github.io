<?php include('server.php'); ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description"  content="affordable products">
    <meta name="author"  content="Arafat Khan">
    <title>Bizness2Day  |  Deals</title>
    <link rel="stylesheet" href="./css/style.css">
	
  </head>
  <body>
    <header>
      <div class="cont">
          <div id="branding">
              <h1><span class="highlight">Bizness2Day</span></h1>
          </div>
          <nav>
                    <ul>
                         <li  class="current"><a  href="deals.php">Deals</a></li>
                         <li ><a  href="invpost.php">Invests</a></li>
                         <li><a href="myprofile.php">MyProfile</a></li>
                         <li></a><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
          </nav>
    </header>

	 
    <div class="create-search-button">
	<form action="search.php" method="post"> 
    
    <label>Search By Category</label><br>
    <input type="text"  name="search items"/>
    
    </div>
    <div class="filter-button">
    <label>Filter(IN-TAKA)</label><br>
    <input type="number" name="filter-button"/>
    </div>
    <section id="boxes">

    </section>
	
<div class="sarchpro"> 
  <form action="pro.php" method="GET">
  <h2>Serach for the<br/> Store below:</h2>
     <table>
	   <tr><td>Store Name:</td><td><input type="text" id="username" name="username"></td></tr>
	   <tr><td><input type="submit" id="submit" value="View Profile"></td></tr>
	 </table>
  </form>
</div> 
	   
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
			   
			  
			   	
               echo "<img src='postimg/".$row['images']."' >";
			    echo "<a href=info.php?product_id=".$row['product_id'].">Product Description</a>";	
	          
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
