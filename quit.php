<?php

	session_start();
	$_SESSION['logged_on'] = "";
	$_SESSION['quit'] = 1;
	header('Location: logout.php');
	exit;
?>