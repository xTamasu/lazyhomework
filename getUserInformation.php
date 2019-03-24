<?php
foreach($conn->query
(
"SELECT User.SessionID, Gruppen.* FROM `User` JOIN Gruppen ON User.GruppeID = Gruppen.gruppe_ID WHERE SessionID = '" . session_id() . "'"
) as $userinformation)
{
	$sessionid = $userinformation['SessionID'];
	$gruppe = $userinformation['gruppe_ID'];
	$canEditHomework = $userinformation['canEditHomework'];
	$canEditSettings = $userinformation['canEditSettings'];
}
?>