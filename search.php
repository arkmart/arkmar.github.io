<?php include('server.php'); ?>



<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <meta name="description"  content="affordable products">
    <meta name="author"  content="Arafat Khan">
    <title>WeBee  |  Deals</title>
    <link rel="stylesheet" href="./css/style.css">
	
  </head>
  <body>
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

	<form action="search.php" method="post"> 
    <div class="create-search-button">
    <label>Search By Category</label><br>
	
    <input type="text" name="search"/>
    <input type="submit" name="search" value="Search"/>
	
	
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
	   
	<div class="deals">
	    <h3>Search Results</h3>


<?php

      $db = mysqli_connect('localhost', 'root', '', 'webee'); 
     
	  
	   if(isset($_POST['search'])) {
		   $search = $_POST['search'];
		   
		    
  
             	  
	     $sql = "SELECT * FROM postdata WHERE category='$search'";
		 
		 $result = mysqli_query($db, $sql);
		
          
			 
		   while($row = mysqli_fetch_array($result)){
			 
		        echo "<div id='post_div'>";
			   	echo "<h3>Store Name: ".$row['username']."</h3>";
			   	
               echo "<img src='postimg/".$row['images']."' >";
			   echo " <p>Product Name: " .$row['proname']. "</p>";
	           echo "<p>Category: ".$row['category']."</p>";
	           echo "<p>Price: ".$row['price']."</p>";
               	echo "<p>About Product: ".$row['text']."</p>";      
		       echo "</div>"; 
			 
		   }
			 
	        
	     
	    
		}
		
	 
	  
	 
	 
	 /* $button = $_GET['submit'];
	 $search = $_GET['search'];
	 
	 
	 
	 if(!$button)
		  echo "you didn't submit keyword ";
	  else{
		   
			 
			  $db = mysqli_connect("localhost", "root", "", "webee");
			  
			  $search_exploded = explode(" ", $search);
			  $x = NULL;
			  foreach($search_exploded as $search_each){
				  $x++;
				  $construct = NULL;
				  if($x == 1)
					  $construct .="keyword LIKE '%$search_each%'";
				  else
					  $construct .="AND keywords LIKE '%$search_each%'";
			  }
			  
			  $construct = "SELECT * FROM postdata WHERE $construct";
			  
			  $result = mysqli_query($db, $construct);
			  
			  $foundnum = mysqli_num_rows($result);
			  
			  if($foundnum == 0)
				  echo "Sorry, there are no matching result for <b> $search </b>";
			  else {
				  echo "$foundnum results found !<p>";
				  while ($runrows = mysqli_fetch_assoc($result)){
					      $username = $runrows['username'];
                          $proname = $runrows['proname'];
                          $category = $runrows['category'];
                          $price = $runrows['price'];
                          $text = $runrows['text'];	
						  $image = $runrows['images'];	
						  
						  echo "<p><h3>".$construct['category']."</h3>".$construct['category']."</p>";
				  }
			  }
	  }*/

?>

	</div>
	



  </body>
</html>