<?php
foreach($conn->query
(
"SELECT User.SessionID, User.Benutzername, Gruppen.* FROM `User` JOIN Gruppen ON User.GruppeID = Gruppen.gruppe_ID WHERE SessionID = '" . session_id() . "'"
) as $userinformation)
{
	$sessionid = $userinformation['SessionID'];
	$username = $userinformation['Benutzername'];
	$gruppe = $userinformation['gruppe_ID'];
	$gruppeName = $userinformation['name'];
	$canEditHomework = $userinformation['canEditHomework'];
	$canEditSettings = $userinformation['canEditSettings'];
}
?>