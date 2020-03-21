<!DOCTYPE html>
<html>
<head>
<title>Contact Us</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<style>

body {font-family: Arial, Helvetica, verdana;}
* {box-sizing: border-box;}

input[type=text], select, textarea {
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  text-color: #fffff;
  border-radius: 4px;
  box-sizing: border-box;
  margin-top: 6px;
  margin-bottom: 16px;
  resize: vertical;
}

input[type=submit] {
  background-color: #F57E1D;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
}

input[type=submit]:hover {
  background-color: #CE6007;
  color: white;
  border-radius: 7px;
}

.container {
  border-radius: 5px;
  background-color: #D597F8;
  padding: 20px;
  width: 60%;
  margin: 15px;
}
</style>
<!-- stylesheet link(s) -->
        	<link rel="stylesheet" href="style2.css">
 
</head>
<body>
<div class="header">
                  <a href="index.php" class="logo"><img src="../Concept1/13ddc981-403d-411d-a32b-47545f0aafa2_200x200-2.png" width="80px" height="80px"><br/>KGismoz</a>
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
    Contact
    </div>
    	
<!-- Index product heading end -->


<!-- Form structure -->
<div class="container">
  <form action="action_page.php">
    <label for="fsname">First Name</label>
    <input type="text" id="fsname" name="firstname" placeholder="Your full name..">

    <label for="lname">Email</label>
    <input type="text" id="email" name="email" placeholder="Your email address..">

    <label for="category">Category</label>
    <select id="category" name="category">
 <option value ="general">General Enquiry</option>   
      <option value="shipping">Shipping</option>
      <option value="other">Other</option>
    </select>

    <label for="subject">Subject</label>
    <textarea id="subject" name="subject" placeholder="Tell us about your query.." style="height:200px"></textarea>

    <input type="submit" value="Submit">
  </form>
</div>




</body>
<!-- Footer class -->
<div class="footer">
  		<p>KGismoz is a trademark of kg15abr</p>
  	<p>Email: kgismoz@gmail.com</p>
  	<p>VAT Registered No:01237654</p>
  	<p></p>
</div>

</html>


