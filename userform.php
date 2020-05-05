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


<!DOCTYPE html>
<html>
<head>
<title>Home</title>
</head>
<body>


<h1> Welcome to login page </h1>


<form action = "loginvalidate1.php" method = "post">
                  <table>
					<tr> 
						<td>username:</td>
						<td>input type="text" name="username" class="textInput"></td>
					</tr>
					<tr> 
						<td>Password:</td>
						<td>input type="password" name="Password" class="textInput"></td>
					</tr>
					<tr> 
						<td>firstname:</td>
						<td>input type="text" name="firstname" class="textInput"></td>
					</tr>
					<tr> 
						<td>lastname:</td>
						<td>input type="text" name="lastname" class="textInput"></td>
					</tr>
					<tr> 
						<td>email:</td>
						<td>input type="text" name="email" class="textInput"></td>
					</tr>
					<tr> 
						<td></td>
						<td>input type="submit" name="register_btn" value="Register"></td>
					</tr>
				</table>	
</form>
</body>
</html>