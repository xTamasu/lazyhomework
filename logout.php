<?php

include ("checklogin.php");
include ("getUserInformation.php");

$conn->query("UPDATE User SET SessionID = '' WHERE Benutzername = \"".$username."\"");
$conn->close();

header("Location:index.php?e=lo");
?>