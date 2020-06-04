<?php
$severname = "localhost";
$username="id13666646_harindu_db";
$password="kalu@124578HK";
$db="id13666646_harindu_databasename";

//create connection
$conn_to_harindu = new mysqli("localhost",$username,$password, $db);

//check connection
if($conn_to_harindu->connect_error)
{
	die("connection failed:". $conn_to_harindu->connect_error);
	
}

?>