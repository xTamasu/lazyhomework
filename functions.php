<?php

include ("connector.php");
include ("checkLogin.php");
include ("getUserInformation.php");

if($canEditSettings == "0")
{
	die("Unzureichende Rechte, bitte kontaktiere einen Administrator");
} // Funktioniert auf Live nicht, warum?

	function newDefaultEntry($conn, $inputFach, $inputAufgabe, $inputVon, $inputBis)
	{
		$sql = "INSERT INTO Hausaufgaben (FachID,Aufgabe,Datum,Bis) VALUES ('" . $inputFach . "', '" . $inputAufgabe . "', '" . $inputVon . "', '" . $inputBis . "')";
		$conn->query($sql);
	
		$conn->close();
		header("Location:home.php");
	}
	
	function deleteEntry($conn, $deleteId)
	{
		$sql = "DELETE FROM Hausaufgaben WHERE HausaufgabenID=" . $deleteId;
		$conn->query($sql);
	
		echo "Entry with ID: " . $deleteId . " was deleted.";
		$conn->close();
		header("Location:home.php");
	}	

	function updateRegisterToken($conn, $token)
	{
		$conn->query("UPDATE Settings SET settingValue = '" .$token. "' WHERE settingName = 'registerToken'");
		$conn->close();
		header("Location:settings.php");
	}

	function changePermission($conn, $usernameToChange, $permission)
	{
		if($permission != "5")
		{
			// Überprüfung einfügen ob Nutzer der zu änderende Benutzer ein Admin ist, wenn ja, werfe ein Fehler aus.
			$conn->query("UPDATE User SET GruppeID = '".$permission."' WHERE Benutzername = '".$usernameToChange."'");
			$conn->close();
			header("Location: settings.php");
		}
		else
		{
			die("Ein Fehler ist aufgetreten! Bitte versuche es erneut!");
		}
	}

	function changePassword($conn, $usernameToChange, $newPassword)
	{
		$newPasswordHashed = password_hash($newPassword, PASSWORD_DEFAULT);
		$conn->query("UPDATE User SET Passwort = '".$newPasswordHashed."' WHERE Benutzername = '".$usernameToChange."'");
		$conn->close();
		header("Location: settings.php");
	}

	if(isset($_POST['sentNewEntry']))
		newDefaultEntry($conn, $_POST['fach'], $_POST['aufgabe'], $_POST['dateVon'], $_POST['dateBis']);

	if(isset($_POST['sentDeleteEntry']))
		deleteEntry($conn, $_POST['sentDeleteEntry']);

	if(isset($_POST['updateRegisterToken']))
		updateRegisterToken($conn, $_POST['token']);

	if(isset($_POST['changePermission']))
		changePermission($conn, $_POST['username'], $_POST['permission']);

	if(isset($_POST['changePassword']))
		changePassword($conn, $_POST['username'], $_POST['newPassword']);

?>