<?php
session_start();
if(!isset($_SESSION['Logged'])){
	header("Location: ../index.php");
	exit();
}
?>
