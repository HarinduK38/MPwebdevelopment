<?php
echo "This is my first php script<br>";
echo "Welcome to my PHP Page<br>";
echo $_POST["username"];

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
echo "LoginValidation page is connected to db successfully";

$sql="SELECT UserID, Password FROM users WHERE UserID = '".$_POST["username"]."' and Password = '".$_POST["password"]."'";

$result = $conn->query($sql);

if($result->num_rows>0)
{
	while($row = $result->fetch_assoc())
	{
		echo"<h1> Successfully Logged in </h1>";
		
	}
	
}
else {
	echo "<h1> login Failed</h1>";
}
?>