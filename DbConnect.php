<?php 

function connect(){  
$conn = new mysqli("localhost", "ti", "2043", "wtk");
if ($conn->connect_errno){
	die("Database connection failed ..." . $conn->connect_error);
}
return $conn;
}
?>