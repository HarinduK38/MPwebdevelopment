<!DOCTYPE html>
<html>
<title>Event Root</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Lato">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
<link rel="stylesheet" href="Stylesheet1.css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<body>



<!-- Navbar (sit on top) -->
<div class="w3-top">
  <div class="w3-bar" id="myNavbar">
    <a class="w3-bar-item w3-button w3-hover-black w3-hide-medium w3-hide-large w3-right" href="javascript:void(0);" onclick="toggleFunction()" title="Toggle Navigation Menu">
      <i class="fa fa-bars"></i>
    </a>
	<a class="navbar-brand" href="support_me.html">
       <img src="Logo.jpg" alt="LOGO" height="20" width="100">
     </a>
	<a href="index.php" class="w3-bar-item w3-button">HOME</a>
    <a href="support_me.html" class="w3-bar-item w3-button w3-hide-small"><i class="fa fa-user"></i> support_me</a>

  </div>

  <!-- Navbar on small screens -->
  <div id="navDemo" class="w3-bar-block w3-white w3-hide w3-hide-large w3-hide-medium">
    <a href="#about" class="w3-bar-item w3-button" onclick="toggleFunction()">Home</a>
    <a href="support_me.html" class="w3-bar-item w3-button" onclick="toggleFunction()">support_me</a>
  </div>
</div>

<!-- First Parallax Image with Logo Text -->
<div class="bgimg-1 w3-display-container w3-opacity-min" id="home">
  <div class="w3-display-middle" style="white-space:nowrap;">
    <span class="w3-center w3-padding-large w3-black w3-xlarge w3-wide w3-animate-opacity">EventRoot Management</span>
  </div>
</div>

<!-- Container (About Section) -->
<div class="w3-content w3-container w3-padding-64" id="about">
  <h3 class="w3-center">Welcome Back</h3>
<?php

include('connector.php');

$sql="SELECT customer_id, password FROM customers WHERE customer_id = '".$_POST["username"]."' and password = '".$_POST["password"]."'";

$result = $conn_to_harindu->query($sql);

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		echo"<h1> Successfully Logged in </h1>";
		echo "<br>";
		echo "Username :";
		echo $_POST["username"];
		echo "<br>";
		echo "<br>";
		echo"Registered Users in the DB :";
		echo "<br>";
		$sql2="SELECT given_name, family_name FROM customers";
		$result2 = $conn_to_harindu->query($sql2);
		if($result2->num_rows>0)
		{
		
    while ($row = $result2->fetch_assoc()) {
        $FirstName = $row["given_name"];
        $LastName = $row["family_name"];
        
        echo $FirstName," ",$LastName;
        echo "<br>";
    }
		}
	}
}
  
else {
	echo "<h1> login Failed</h1>";
}
?>
    

    <!-- Hide this text on small devices -->
    <div class="w3-col m6 w3-hide-small w3-padding-large">
      
    </div>
  </div>
 
</div>

<!-- Footer -->
<footer class="w3-center w3-black w3-padding-30 w3-opacity w3-hover-opacity-off">
  <a href="#home" class="w3-button w3-light-grey"><i class="fa fa-arrow-up w3-margin-right"></i>To the top</a>
  <div class="w3-xlarge w3-section">
    <i class="fa fa-facebook-official w3-hover-opacity"></i>
    <i class="fa fa-instagram w3-hover-opacity"></i>
    <i class="fa fa-snapchat w3-hover-opacity"></i>
    <i class="fa fa-pinterest-p w3-hover-opacity"></i>
    <i class="fa fa-twitter w3-hover-opacity"></i>
    <i class="fa fa-linkedin w3-hover-opacity"></i>
  </div>
  <p> last updated on <script>document.write(new Date().getFullYear())</script> © Harindu Webmaster | Event Root Management.</p>
</footer>

</body>
</html>
