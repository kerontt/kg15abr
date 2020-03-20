<html>

<head>

<title>Index page</title><link rel="stylesheet" href="stylex.css">
 </head>
<main class="container">


	
<div class="banner">KGismoz</div>
	

	<div class="main"></div>


	

<?php


if (isset($_REQUEST['Id']))
{
    
    $theProductId = $_REQUEST['Id'];
    
    $servername = "localhost";
    $username = "root";
    $password = "root";
    $dbname = "shop";
    
    // Create connection
    $conn = new mysqli($servername, $username, $password, $dbname);
    // Check connection
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    
    mysqli_set_charset($conn, "utf-8");
    
    $q = "SELECT * FROM Products WHERE Id=$theProductId";
    $r = mysqli_query($conn, $q);
    
    if ($r)
    {
        while ($row = mysqli_fetch_array($r, MYSQLI_ASSOC))
        {
            $thisImage = $row['ProductImageMain'];
            $thisCaption = $row['Caption'];
            $thisPrice = $row['Price'];
            $thisProductDescription = $row['ProductDescription'];
            $thisProductName = $row['ProductName'];
           
            
      
          
            echo "<img class=\"left-column img\" src=\"$thisImage\" />";
            echo "<class=\"product-description\" <br/><H2>$thisProductName</H2>";
            echo "<class=\"product-description p\" <br/><H3>$thisCaption</H3><br/>$thisProductDescription<br/><p>";
            echo "<class=\"product-price\" <br/><p>£$thisPrice</p>";
            echo '<p><a href="#" class="cart-btn" role="Button">Add to Cart</a></p>';
            
  
            
          
    }
    
}
    
}
else{
    echo "Invalid Product ID";
}
    

?>
   


</main>
</html>
