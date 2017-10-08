<?php

	session_start();
	if ($_SESSION['logged_on'] === "admin")
	{
		if ($_POST['login'] && $_POST['submit']) 
		{
			$account = unserialize(file_get_contents('./secure/password'));
			if ($account) 
				foreach ($account as $key => $arg) 
				if ($arg['login'] === $_POST['login']) 
				{
					$exist = 1;
					unset($account[$key]);
					file_put_contents('./secure/password', serialize($account));
				}
		}
	}
	// header('Location: settings.php');
	// exit;

?>

