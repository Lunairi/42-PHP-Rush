<?php

	session_start();
	$invalid = 0;

	if ($_POST['login'] && $_POST['password'] && $_POST['password2'] && $_POST['submit']) 
	{
		$account = unserialize(file_get_contents('./secure/password'));
		if ($account) 
			foreach ($account as $key => $arg) 
			{
				if ($arg['login'] === $_POST['login'])
				$invalid = 1;
			}
		if ($invalid) 
			$_SESSION['creation'] = 1;
		else if ($_POST['password'] != $_POST['password2'])
			$_SESSION['creation'] = 2;
		else 
		{
			$_SESSION['creation'] = 3;
			$temp['login'] = $_POST['login'];
			$temp['password'] = hash('whirlpool', $_POST['password']);
			$account[] = $temp;
			file_put_contents('./secure/password', serialize($account));
			header('Location: login.php');
			exit;
		}
	} 
	else 
		$_SESSION['creation'] = 4;
	header('Location: newaccount.php');
	exit;
	
?>