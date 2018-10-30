<?php

	include ("connector.php");

	function newDefaultEntry($servername, $username, $password, $dbname, $inputFach, $inputAufgabe, $inputVon, $inputBis)
	{
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "INSERT INTO Hausaufgaben (ID,Fach,Aufgabe,Datum,Bis) VALUES (NULL, '" . $inputFach . "', '" . $inputAufgabe . "', '" . $inputVon . "', '" . $inputBis . "')";
		$conn->query($sql);
	
		echo "A new Entry was created!";
		$conn->close();
	}
	
	function deleteEntry($servername, $username, $password, $dbname, $deleteId)
	{
		$conn = new mysqli($servername, $username, $password, $dbname);
		if ($conn->connect_error) 
		{
			die("Connection failed: " . $conn->connect_error);
		}
	
		$sql = "DELETE FROM Hausaufgaben WHERE ID=" . $deleteId;
		$conn->query($sql);
	
		echo "Entry with ID: " . $deleteId . " was deleted.";
		$conn->close();
	}	

	if(isset($_POST['sentNewEntry']))
		newDefaultEntry($servername, $username, $password, $dbname, $_POST['fach'], $_POST['aufgabe'], $_POST['dateVon'], $_POST['dateBis']);

	if(isset($_POST['sentDeleteEntry']))
		deleteEntry($servername, $username, $password, $dbname, $_POST['sentDeleteEntry']);

header("Location: " . "http://" . $_SERVER['HTTP_HOST'] . "/home.php");	
?>