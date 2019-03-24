<?php
session_start();

include("connector.php");

if ($result = $conn->query("SELECT SessionID FROM User WHERE SessionID ='" .session_id(). "'")) {
    /* determine number of rows result set */
	$row_cnt = $result->num_rows;
	if($row_cnt < 1)
	{
		header("Location:index.php");
	}

	foreach ($conn->query("SELECT Gruppe, SessionID FROM User WHERE SessionID ='" .session_id(). "'") as $row) 
	{

	}
	$gruppe = $row['Gruppe'];
	$sessionid = $row['SessionID'];
    /* close result set */
	$result->close();
}
?>