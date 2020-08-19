<?php
session_start();
if(!$_SESSION['login']) {
	header("location: /learnphp/13_php/auth/login.php");
	exit;
}
?>