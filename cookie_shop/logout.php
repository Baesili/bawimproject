<?php
session_start();

if(isset($_SESSION['username']))
	unset($_SESSION['username']);
if(isset($_SESSION['type']))
	unset($_SESSION['type']);
if (isset($_SERVER["HTTP_REFERER"])) {
	header("Location: " . $_SERVER["HTTP_REFERER"]);
}

?>