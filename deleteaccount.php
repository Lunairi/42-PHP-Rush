<?php
$invalid = 0;
	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_POST['password'] && $_POST['password2'] && $_POST['submit']) 
		{
			$account = unserialize(file_get_contents('./secure/password'));
			if ($_POST['password'] === $_POST['password2'])
			{
				if ($account) 
					foreach ($account as $key => $arg) 
					if ($arg['login'] === $_SESSION['logged_on'] && $arg['password'] === hash('whirlpool', $_POST['password'])) 
					{
						$exist = 1;
						unset($account[$key]);
						file_put_contents('./secure/password', serialize($account));
					}
			}
		}
		if ($exist == 1)
		{
			$_SESSION['delete'] = 1;
			$_SESSION['logged_on'] = "";
			// echo "Account deleted.\n";
		}
		else if ($_POST['password'] != $_POST['password2'])
		{
			$_SESSION['delete'] = 3;
			// echo "Passwords must match.\n";
		}
		else if ($exist != 1)
		{
			$_SESSION['delete'] = 4;
			// echo "The password is incorrect.\n";
		}
		else 
		{
			$_SESSION['delete'] = 5;
			// echo "You must fill out all the forms.\n";
		}
	}
header('Location: settings.php');
exit;

?>

