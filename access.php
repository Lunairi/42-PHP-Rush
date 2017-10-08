<?php

	require_once('auth.php');
	session_start();
	if ($_POST['login'] && $_POST['password'] && auth($_POST['login'], $_POST['password']))
	{
		$_SESSION['logged_on'] = $_POST['login'];
		$_SESSION['access'] = 1;
		// echo "You are now logged in.\n";
	} 
	else 
	{
		$_SESSION['logged_on'] = "";
		$_SESSION['access'] = 2;
		// echo "Information is not correct.\n";
	}
header('Location: login.php');
exit;

?>

