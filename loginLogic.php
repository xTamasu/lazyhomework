

<?php
session_start();
include("connector.php");
$username = $_POST['username'];
$password = $_POST['password'];


if (isset($username) && isset($password))
{	
	
	$sql = "SELECT Benutzername, Passwort FROM User WHERE Benutzername='" .$username. "'";
	foreach ($conn->query($sql) as $row) 
	{
		$row['Benutzername']." ".$row['Passwort']."<br />";
		$row['Benutzername']."<br /><br />";
	}

	/*echo "Passwort:" . "\"". $password . "\" ";
	echo "Aus der Datenbank:"  . "\"". $row['Passwort'] . "\" ";
	$verified = false;

	echo password_hash($password, PASSWORD_DEFAULT);*/

	if (@$row['Benutzername'] == $username && password_verify($password, $row['Passwort']))
	{
		
		$Sessioito = session_id();
		//echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
		//SQL 
		$pdo = new PDO("mysql:dbname=lazyhomework;host=localhost", "lazyhomework", "lazyboys"); //In Lokalen Test Versionen muss "host=127.0.0.1" sonst gehts nicht
 
		$statement = $pdo->prepare("UPDATE `User` SET `SessionID` = '$Sessioito' WHERE `User`.`Benutzername` = '$username'");
		
		$statement->execute(array('SessionID' => '567'));
		
		
 		
		header("Location:home.php"); // Alles erfolgreich
		//echo (session_id());
		//exit();
		
	}
	else // Falsches Passwort oder Benutzername "wp"
	{
		header("Location:index.php?e=wp");
	}
}
else // Keine Eingabe "ne"
{
	header("Location:index.php?e=ne");
	
}
?>
