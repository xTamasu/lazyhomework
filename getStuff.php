<?php

$servername = "localhost";
$username = "admin";
$password = "andrenicolukas";

// Create connection
$conn = new mysqli($servername, $username, $password);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
echo "Connected successfully";

$query = "SELECT * FROM  Hausaufgaben";

if ($result = $mysqli->query($query)){
	while ($row = $result->fetch_row()){
		printf("%s(%s,%s)\n" , $row[0], $row[1], $row[2]);
	}	
	result->close();
}

$mysqli->close();
	
?>