<?php

	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_POST['password'] && $_POST['password2'] && $_POST['submit']) 
		{
			$account = unserialize(file_get_contents('./secure/password'));
			$basket = unserialize(file_get_contents('./secure/basket'));
			if ($_POST['password'] === $_POST['password2'])
			{
				if ($account) 
				{
					foreach ($account as $key => $arg) 
						if ($arg['login'] === $_SESSION['logged_on'] && $arg['password'] === hash('whirlpool', $_POST['password'])) 
						{
							$exist = 1;
							unset($account[$key]);
							file_put_contents('./secure/password', serialize($account));
						}
					foreach ($basket as $key2 => $arg2) 
						if ($arg2['login'] === $_SESSION['logged_on']) 
						{
							unset($basket[$key2]);
							file_put_contents('./secure/basket', serialize($basket));
						}
				}
			}
		}
		if ($exist == 1)
		{
			$_SESSION['delete'] = 1;
			$_SESSION['logged_on'] = "";
		}
		else if ($_POST['password'] != $_POST['password2'])
			$_SESSION['delete'] = 3;
		else if ($exist != 1)
			$_SESSION['delete'] = 4;
		else 
			$_SESSION['delete'] = 5;
	}
	header('Location: settings.php');
	exit;

?>

