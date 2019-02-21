

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
		
		//echo 'Hello ' . htmlspecialchars($_COOKIE["name"]) . '!';
		//SQL 
		
		//$Sessioito = session_id();
		
		
 		
		header("Location: /lazyhomework/home.php");
		//echo 'Fick mein Fötzches';
		//exit();
	}
	else 
	{
		//$e = "wp";
		header("else 1");
	}
}
else 
{
	//$e = "ne";
	header("echo 2");
}
?>