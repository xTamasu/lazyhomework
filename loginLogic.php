

<?php
session_start();
include ("connector.php");
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

	if (@$row['Benutzername'] == $username && $row['Passwort'] == $password)
	{
		$Sessioito = session_id();
		//echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
		//SQL 
		$pdo = new PDO("mysql:dbname=lazyhomework;host=127.0.0.1", "root", "");
 
		$statement = $pdo->prepare("UPDATE `user` SET `SessionID` = '$Sessioito' WHERE `user`.`Benutzername` = '$username'");
		$statement->execute(array('SessionID' => '567'));
		
		
		
 		
		header("Location: /lazyhomework/home.php");
		
		//exit();
	}
	else 
	{
		$e = "wp";
		//alsches Passwort oder Username";
		
	}
}
else 
{
	//$e = "ne";
	header("echo 2");
}
?>
