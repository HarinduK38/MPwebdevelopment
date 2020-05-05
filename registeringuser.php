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
echo "connected successfully<br>";
$sql="INSERT INTO users (username, password, firstname, lastname, email) VALUES ('".$_POST["username"]."', '".$_POST["password"]."', '".$_POST["firstname"]."', '".$_POST["lastname"]."', '".$_POST["email"]."')";
$result=$conn->query($sql);
echo "Successfull Registration !";
?>