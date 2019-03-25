<?php

	include ("connector.php");

	function newDefaultEntry($servername, $username, $password, $dbname, $inputFach, $inputAufgabe, $inputVon, $inputBis)
	{
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "INSERT INTO Hausaufgaben (FachID,Aufgabe,Datum,Bis) VALUES ('" . $inputFach . "', '" . $inputAufgabe . "', '" . $inputVon . "', '" . $inputBis . "')";
		$conn->query($sql);
	
		echo "A new Entry was created!";
		$conn->close();
		header("Location:home.php");
	}
	
	function deleteEntry($servername, $username, $password, $dbname, $deleteId)
	{
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "DELETE FROM Hausaufgaben WHERE HausaufgabenID=" . $deleteId;
		$conn->query($sql);
	
		echo "Entry with ID: " . $deleteId . " was deleted.";
		$conn->close();
		header("Location:home.php");
	}	

	function updateRegisterToken($conn, $token)
	{
		$conn->query("UPDATE Settings SET registerToken = '" .$token. "' WHERE settings_ID = '1'");
		$conn->close();
		header("Location:settings.php");
	}

	if(isset($_POST['sentNewEntry']))
		newDefaultEntry($servername, $username, $password, $dbname, $_POST['fach'], $_POST['aufgabe'], $_POST['dateVon'], $_POST['dateBis']);

	if(isset($_POST['sentDeleteEntry']))
		deleteEntry($servername, $username, $password, $dbname, $_POST['sentDeleteEntry']);

	if(isset($_POST['updateRegisterToken']))
		updateRegisterToken($conn, $_POST['token']);

?>