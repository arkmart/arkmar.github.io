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
		                 <li ><a  href="deals.php">Deals</a></li>
                         <li class="current"><a  href="invpost.php">Investor News</a></li>
                         <li><a href="myprofile.php">MyProfile</a></li>
                         <li></a><a href="login.php?logout='1'">Logout</a></li>
                    </ul>
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
	
	</div>
     </form>
	 </div>
	 
	<div class="invests">
	    <h3>INVESTS</h3>

<?php
$db = mysqli_connect('localhost', 'root', '', 'webee');
             
            	 
	         $sql = "SELECT * FROM postdata";
	         $result = mysqli_query($db, $sql);
	         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
				 
				 
	           if($row != ""){
	           
		       echo "<div id='invpost_div'>";
			   
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