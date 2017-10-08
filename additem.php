<?php

	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_POST['amount'])
		{
			$basket = unserialize(file_get_contents('./secure/basket'));
			$temp['login'] = $_SESSION['logged_on'];
			$_SESSION['add'] = 2;
			foreach ($basket as $key => $arg)
			{
				if ($arg['login'] === $_SESSION['logged_on'])
					$cart = 1;
				if ($cart && !$add)
				{
					$add = 1;
					if ($_POST['soil1'] > 0)
					{
						$basket[$key]['soil1'] = $basket[$key]['soil1'] + ($_POST['soil1'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil2'] > 0)
					{
						$basket[$key]['soil2'] = $basket[$key]['soil2'] + ($_POST['soil2'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil3'] > 0)
					{
						$basket[$key]['soil3'] = $basket[$key]['soil3'] + ($_POST['soil3'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil4'] > 0)
					{
						$basket[$key]['soil4'] = $basket[$key]['soil4'] + ($_POST['soil4'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil5'] > 0)
					{
						$basket[$key]['soil5'] = $basket[$key]['soil5'] + ($_POST['soil5'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil6'] > 0)
					{
						$basket[$key]['soil6'] = $basket[$key]['soil6'] + ($_POST['soil6'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil7'] > 0)
					{
						$basket[$key]['soil7'] = $basket[$key]['soil7'] + ($_POST['soil7'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil8'] > 0)
					{
						$basket[$key]['soil8'] = $basket[$key]['soil8'] + ($_POST['soil8'] * 1);
						$_SESSION['add'] = 1;
					}
					if ($_POST['soil9'] > 0)
					{
						$basket[$key]['soil9'] = $basket[$key]['soil9'] + ($_POST['soil9'] * 1);
						$_SESSION['add'] = 1;
					}
					file_put_contents('./secure/basket', serialize($basket));
				}
			}
			if (!$cart)
			{
				if ($_POST['soil1'] > 0)
				{
					$temp['soil1'] = ($_POST['soil1'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil2'] > 0)
				{
					$temp['soil2'] = ($_POST['soil2'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil3'] > 0)
				{
					$temp['soil3'] = ($_POST['soil3'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil4'] > 0)
				{
					$temp['soil4'] = ($_POST['soil4'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil5'] > 0)
				{
					$temp['soil5'] = ($_POST['soil5'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil6'] > 0)
				{
					$temp['soil6'] = ($_POST['soil6'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil7'] > 0)
				{
					$temp['soil7'] = ($_POST['soil7'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil8'] > 0)
				{
					$temp['soil8'] = ($_POST['soil8'] * 1);
					$_SESSION['add'] = 1;
				}
				if ($_POST['soil9'] > 0)
				{
					$temp['soil9'] = ($_POST['soil9'] * 1);
					$_SESSION['add'] = 1;
				}
				$basket[] = $temp;
				file_put_contents('./secure/basket', serialize($basket));
				$_SESSION['add'] = 1;
			}
		}
		else
			$_SESSION['add'] = 2;
	}
	header('Location: basket.php');
	exit;
?>
