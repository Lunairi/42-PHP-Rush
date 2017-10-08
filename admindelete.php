<?php

	session_start();
	if ($_SESSION['logged_on'] === "admin")
	{
		if ($_POST['login'] && $_POST['reason'] && $_POST['submit']) 
		{
			$account = unserialize(file_get_contents('./secure/password'));
			$basket = unserialize(file_get_contents('./secure/basket'));
			$delete = unserialize(file_get_contents('./secure/deletelog'));
			if ($account) 
			{
				foreach ($account as $key => $arg) 
				{
					if ($_POST['login'] === "admin")
						$_SESSION['admin'] = 1;
					else if ($arg['login'] === $_POST['login']) 
					{
						$exist = 1;
						unset($account[$key]);
						file_put_contents('./secure/password', serialize($account));
						$temp['login'] = $_POST['login'];
						$temp['reason'] = $_POST['reason'];
						$delete[] = $temp;
						file_put_contents('./secure/deletelog', serialize($delete));
						$_SESSION['admin'] = 2;
					}
				}
				foreach ($basket as $key2 => $arg2) 
					if ($arg2['login'] === $_POST['login']) 
					{
						unset($basket[$key2]);
						file_put_contents('./secure/basket', serialize($basket));
					}
			}
		}
		else
			$_SESSION['admin'] = 3;
	}
	header('Location: settings.php');
	exit;

?>

