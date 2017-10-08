<?php

	require_once('auth.php');
	session_start();
	if ($_POST['login'] && $_POST['password'] && auth($_POST['login'], $_POST['password']))
	{
		$_SESSION['logged_on'] = $_POST['login'];
		$_SESSION['access'] = 1;
	} 
	else 
	{
		$_SESSION['logged_on'] = "";
		$_SESSION['access'] = 2;
	}
	header('Location: login.php');
	exit;

?>

