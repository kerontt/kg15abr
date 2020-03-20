<html>
<head>

<link rel="stylesheet" href="style2.css"/>
<style></style>

</head>
<body>

<div class="main">
<div class="banner">
LosBarrel Audio!

<?php

    $dbc = mysqli_connect("localhost:8889", "root", "root", "shop")
    OR die(mysqli_connect_error());
    
    mysqli_set_charset($dbc, "utf-8");
    
    $q = "SELECT * FROM Products";
    $r = mysqli_query($dbc, $q);
    
    if ($r)
    {
        while ($row -= mysqli_fetch_array($r, MYSQLI_ASSOC))
        {
            
            //echo $row['Id'] . "|" . $row['ProductImageMain'] . "|' . $row['Caption'];
            //echo "<br/>";
            
            $thisImage = $row['ProductImageMain'];
            $thisCaption = $row['Caption'];
            
            echo '< href="detail.html"><div class="product">';
            echo "img class=\"thumbnail clipcircle\" src=\"$thisImage\" /><br>/>$thisCaption";
            echo '</div></a>';
        }
        
    }
    else 
    {
        echo "problem with the query";
    }
    ?>
    </div>
    </body>
    </html>
    
    
   