<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" href="style2.css">
	
	  <!-- additional CSS for carosell -->
	  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
	  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">
	  <!-- end of carocell style references -->
	  
	<style> </style>

</head>
<body>
<div class="main"></div>
<div class="banner">KGismoz</div>

	<ul class="mainnav">

  <li><a href="../concept1/index9.php">Home</a></li>
  <li><a href="#news">News</a></li>
  <li><a href="#contact">Contact</a></li>
  <li><a href="#about">About</a></li>
  </ul>
	
	
	<!-- carosell code -->
	<div id="demo" class="carousel slide" data-ride="carousel">

  <!-- Indicators -->
  <ul class="carousel-indicators">
    <li data-target="#demo" data-slide-to="0" class="active"></li>
    <li data-target="#demo" data-slide-to="1"></li>
    <li data-target="#demo" data-slide-to="2"></li>
  </ul>

  <!-- The slideshow -->
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="3512g-esp-right-2017.jpg" width="100%" height="50%" alt="3212g" >
    </div>
    <div class="carousel-item">
      <img src="61lJlc2UFOL._SL1254_.jpg"  width="100%" height="50%" alt="Beats Solo 3">
    </div>
    <div class="carousel-item">
      <img src="Z4-12-right-2019.jpg"  width="100%" height="50%"  alt="Z4">
    </div>
  </div>

  <!-- Left and right controls -->
  <a class="carousel-control-prev" href="#demo" data-slide="prev">
    <span class="carousel-control-prev-icon"></span>
  </a>
  <a class="carousel-control-next" href="#demo" data-slide="next">
    <span class="carousel-control-next-icon"></span>
  </a>

</div>

<!-- carosell code end -->

<?php
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
        
        $thisImage = $row['ProductImageMain'];
        $thisCaption = $row['Caption'];
        $thisPrice = $row['Price'];
        
      
    
        echo '<a href="detail.html"><div class="product">';
        echo "<img class=\"thumbnail \" src=\"$thisImage\" /><br/><h3>$thisCaption</h3><p></p><br/>£$thisPrice";
        echo '</a>';
        echo '</div>';
        echo '<p><a href="#" class="btn btn-primary" role="button">Button</a></p>';
    }
    
}
else
{
    echo "problem with the query";
}
?>



</body>
</html>
   