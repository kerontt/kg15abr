<html>
<head>
	<title>Index page</title>
	<link rel="stylesheet" href="style2.css">
	
	<style> </style>

</head>
<body>
<div class="main"></div>
<div class="banner">KGismoz</div>

<div class="H1">kgismox</div>


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
        
        //echo $row['Id'] . "|" . $row['ProductImageMain'] . "|' . $row['Caption'];
        //echo "<br/>";
        
        $thisImage = $row['ProductImageMain'];
        $thisCaption = $row['Caption'];
        
        
        echo '<a href="detail.html"><div class="product">';
        echo "<img class=\"thumbnail clipcircle\" src=\"$thisImage\" /><br/><$thisCaption";
        echo '</div></a>';
    }
    
}
else
{
    echo "problem with the query";
}
?>

</body>
</html>
   