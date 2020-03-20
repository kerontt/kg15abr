<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" href="style2.css">
	
	</head>
	
	
	<body>
	<div class="main"></div>
<div class="banner">KGismoz</div>
	



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
        $thisId = $row['Id'];
        
      
    
        echo "<a href=\"detail.php?Id=$thisId\"><div class=\"product\">";
        echo "<img class=\"thumbnail \" src=\"$thisImage\" /><br/><h3>$thisCaption</h3><p></p><br/>£$thisPrice";
        echo '</a>';
        echo '<p><a href="#" class="btn btn-primary" role="button">Button</a></p>';
        echo '</div>';
    }
    
}
else
{
    echo "problem with the query";
}
?>



</body>
</html>
   