<?php
$servername = "localhost";
$username = "admin";
$password = "andrenicolukas";
$dbname = "Aufgaben";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

/*$sql = "SELECT * FROM Hausaufgaben";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["ID"]. " - Fach: " . $row["Fach"]. " - Aufgabe: " . $row["Aufgabe"]. " - Datum: " . $row["Datum"].
		" -Bis: " .$row ["Bis"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();*/
?>