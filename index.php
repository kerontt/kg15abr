<html>
		<head>

	<title>Index page</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- stylesheet link(s) -->
        	<link rel="stylesheet" href="style2.css">
        			</head>
	
	<!-- header start -->
        	<body>
        	<div class="header">
                  <a href="#default" class="logo"><img src="../Concept1/13ddc981-403d-411d-a32b-47545f0aafa2_200x200-2.png" width="80px" height="80px"><br/>KGismoz</a>
                  <div class="header-right">
                    <a class="in-active" href="#home"></a>
                    <a href="contact.php">Contact</a>
                    <a href="about.php">About Us</a>
                  </div>
                </div>

		<!-- secondary banner for future concept -->
<div class="mainnav">23034 Lime Tree Street, Loughborough</div>
<!-- secondary banner end for future concept -->

	
	<!-- breadcrumbs -->
		
        <nav aria-label="breadcrumb">
          <ol class="breadcrumb">
            <li class="breadcrumb-item"><a href="../concept1/index.php">Home</a></li>
            <li class="breadcrumb-item active" aria-current="page">Current Page</li>
          </ol>
        </nav>

	
<!-- Index product heading start-->

    <div class="indexpageproducts">
    Home of High End Audio
    </div>

    <div class="indexpageproducts">
    Products
    </div>
    	
<!-- Index product heading end -->



<!-- Database product query for 'Shop' database and 'Products' list. -->
<?php

//Assign variables for credentials.
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

$sql = "SELECT * FROM Products";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
    while ($row = mysqli_fetch_array($result, MYSQLI_ASSOC))
    {
        
        //echo $row['Id'] . "|" . $row['ProductImageMain'] . "|' . $row['Caption'] . $row['Price'];
        //echo "<br/>";
        
        //Assign Database fields to variables;
        $thisImage = $row['ProductImageMain'];
        $thisCaption = $row['Caption'];
        $thisPrice = $row['Price'];
        $thisId = $row['Id'];
        $thisProductName = $row['ProductName'];
        $thisProductDescription = $row['ProductDescription'];
        
        //truncate product description to tidy index page;
        $ShortDescription = substr($thisProductDescription, 0, 20) . "...";
       
       
        
      
        //output database contents to page looping each found product. 
        echo "<a href=\"detail.php?Id=$thisId\"><div class=\"product\">";
        echo "<img class=\"thumbnail\" src=\"$thisImage\" /><br/><h3>$thisCaption</h3><h4>$thisProductName</h4><p>$ShortDescription</p><br/>£$thisPrice";
        echo '<p><a href="#" class="btn btn-primary" role="button">See more!</a></p>';
        echo '</div>';
     
    }
    
}
else
{
    echo "problem with the query";
}
?>
<!-- Database product query end-->


<!-- Footer class -->
<div class="mainfooter">
    <br/>
  		<p>KGismoz is a trademark of kg15abr</p>
  	<p>Email: kgismoz@gmail.com</p>
  	<p>VAT Registered No:01237654</p>
</div>


</body>
</html>
   