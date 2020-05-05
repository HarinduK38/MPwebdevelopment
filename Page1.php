<html>
<head>
<title>Home</title>
</head>
<body>
<?php

echo "This is my first php script<br>";
echo "Welcome to my PHP Page<br>";

$severname = "localhost";
$username="root";
$password="";
$db="vechilemanagement";

//create connection
$conn = new mysqli("localhost",$username,$password, $db);

//check connection
if($conn->connect_error)
{
	die("connection failed:". $conn->connect_error);
	
}
echo "connected successfully";
?>

<h1> Welcome to login page </h1>


<form action = "loginvalidate1.php" method = "post">
                  <label>UserName  :</label><input type = "text" name = "username" class = "box"/><br /><br />
                  <label>Password  :</label><input type = "password" name = "password" class = "box" /><br/><br />
                  <input type = "submit" value = " Submit "/><br />
               </form>
<p> 
</body>
</html>