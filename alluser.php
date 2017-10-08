<?php

	session_start();
	if ($_SESSION['logged_on'] === "admin")
	{
		$account = unserialize(file_get_contents('./secure/password'));
		if ($account) 
			foreach ($account as $key => $arg) 
			if ($arg['login'] === $_POST['login']) 
				echo "User: " . $account[$key] . ".\n";
	}

?>

