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
			$_SESSION['acreate'] = 1;
		else if ($_POST['password'] != $_POST['password2'])
			$_SESSION['acreate'] = 2;
		else 
		{
			$_SESSION['acreate'] = 3;
			$temp['login'] = $_POST['login'];
			$temp['password'] = hash('whirlpool', $_POST['password']);
			$account[] = $temp;
			file_put_contents('./secure/password', serialize($account));
			file_put_contents('./secure/createlog', serialize($account));
		}
	} 
	else 
		$_SESSION['acreate'] = 4;
	header('Location: settings.php');
	exit;
	
?>