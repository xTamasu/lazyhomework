<?php

session_start();
if(!isset($_SESSION['userid'])) 
{
	die('Bitte zuerst <a href="index.php">einloggen</a');
}
?>