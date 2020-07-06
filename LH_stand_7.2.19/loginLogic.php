<?php
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
		header("Location: /home.php") ;
		exit();
	}
	else 
	{
		$e = "wp";
		header("Location: /?e=$e");
	}
}
else 
{
	$e = "ne";
	header("Location: /?e=$e");
}
?>