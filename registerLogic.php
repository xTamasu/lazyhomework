<?php
include("connector.php");
$username = $_POST['username'];
$token = $_POST['token'];
$password = $_POST['password'];
$tokenIsValid = false;

foreach ($conn->query("SELECT settingValue FROM `Settings` WHERE Settings.settingName = 'registerToken'") as $tokenList) 
{
	if($tokenList['settingValue'] == $token)
	{
		$tokenIsValid = true;
	}
}


if($tokenIsValid)
{
	if (isset($username) && isset($password) && isset($token))
	{	
		
		$sql = "SELECT Benutzername FROM User WHERE Benutzername='" .$username. "'"; // e = error, at = already taken, wt = wrong token, sr = sucessful registration
		if ($result = $conn->query($sql)) {
			/* determine number of rows result set */
			$row_cnt = $result->num_rows;
			if($row_cnt < 1)
			{
				$sql = "INSERT INTO `User` (`Benutzername`, `Passwort`, `GruppeID`) VALUES ('".$username."', '".password_hash($password, PASSWORD_DEFAULT)."', '1')";
				$conn->query($sql);
				header("Location: index.php?e=sr");
			}
			else 
			{
				$result->close();
				header("Location:register.php?e=at");
			}
		}
	}
}
else 
{
	header("Location: register.php?e=wt");
}
?>
