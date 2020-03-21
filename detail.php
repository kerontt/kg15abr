<html>
		<head>

	<title>Index</title>
		<link rel="icon" href="../Concept1/Library/Images/Logo/13ddc981-403d-411d-a32b-47545f0aafa2_200x200-2.png" type="image/gif" sizes="16x16">
	<!-- stylesheet link(s) -->
        	<link rel="stylesheet" href="../Concept1/Library/Style/style2.css">
        		<meta name="viewport" content="width=device-width, initial-scale=1">
        	</head>
	
	<!-- header start -->
      	<body>
        	<div class="header">
                  <a href="index.php" class="logo"><img src="../Concept1/Library/Images/Logo/13ddc981-403d-411d-a32b-47545f0aafa2_200x200-2.png" width="80px" height="80px"><br/>KGismoz</a>
                  <div class="header-right">
                    <a class="in-active" href="#home"></a>
                    <a href="contact.php">Contact</a>
                    <a href="about.php">About Us</a>
                  </div>
                </div>

		<!-- secondary banner for future concept -->
<div class="mainnav">23034 Lime Tree Street, Loughborough</div>
<!-- secondary banner end for future concept -->

	
	<!-- header end -->
		
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
    Products Description
    </div>
    	
<!-- Index product heading end -->



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
            $thisProductName = $row['ProductName'];
            $thisProductDescription = $row['ProductDescription'];
            
            
            
            echo "<img class=\"productdetail\" src=\"$thisImage\" />";
            echo "<class=\"productdescription\" <br/><H2>$thisProductName</H2>";
            echo "<class=\"productdescription p\" <br/><H3>$thisCaption</H3><br/>$thisProductDescription<br/><p>";
            echo "<class=\"productprice\" <br/><p>£$thisPrice</p>";
           
            
            
          
    }
    
}
    
}
else{
    echo "Invalid Product ID";
}
    

?>

<p>
<p>
<p>
<!-- Database product query end-->


<!-- Footer class -->
<div class="footer">
  		<p>KGismoz is a trademark of kg15abr</p>
  	<p>Email: kgismoz@gmail.com</p>
  	<p>VAT Registered No:01237654</p>
  	<p></p>
</div>


</body>
</html>
   