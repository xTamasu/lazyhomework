<?php
$servername = "localhost";
$username = "lazyhomework";
$password = "lazyboys";
$dbname = "lazyhomework";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
	//echo "connected"
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>