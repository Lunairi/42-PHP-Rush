<?php

	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_POST['amount'])
		{
			$basket = unserialize(file_get_contents('./secure/basket'));
			$checkout = unserialize(file_get_contents('./secure/checkout'));
			$temp['login'] = $_SESSION['logged_on'];
			foreach ($basket as $key => $arg)
			{
				if ($arg['login'] === $_SESSION['logged_on'])
					$cart = 1;
				if ($cart && !$buy)
				{
					$buy = 1;
					if ($_POST['soil1'] > 0)
					{
						$temp['soil1'] = $basket[$key]['soil1'] + ($_POST['soil1'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil2'] > 0)
					{
						$temp['soil2'] = $basket[$key]['soil2'] + ($_POST['soil2'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil3'] > 0)
					{
						$temp['soil3'] = $basket[$key]['soil3'] + ($_POST['soil3'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil4'] > 0)
					{
						$temp['soil4'] = $basket[$key]['soil4'] + ($_POST['soil4'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil5'] > 0)
					{
						$temp['soil5'] = $basket[$key]['soil5'] + ($_POST['soil5'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil6'] > 0)
					{
						$temp['soil6'] = $basket[$key]['soil6'] + ($_POST['soil6'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil7'] > 0)
					{
						$temp['soil7'] = $basket[$key]['soil7'] + ($_POST['soil7'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil8'] > 0)
					{
						$temp['soil8'] = $basket[$key]['soil8'] + ($_POST['soil8'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_POST['soil9'] > 0)
					{
						$temp['soil9'] = $basket[$key]['soil9'] + ($_POST['soil9'] * 1);
						$_SESSION['buy'] = 1;
					}
					if ($_SESSION['buy'] == 1)
					{
						$purchase[] = $temp;
						file_put_contents('./secure/checkout', serialize($purchase));
						foreach ($basket as $key2 => $arg2) 
							if ($arg2['login'] === $_POST['login']) 
							{
								unset($basket[$key2]);
								file_put_contents('./secure/basket', serialize($basket));
							}
					}
				}
			}
			if ($_SESSION['buy'] != 1)
			{
				echo "There is nothing to checkout.";
			}
		}
		else
			$_SESSION['buy'] = 2;
	}
	header('Location: receipt.php');
	exit;
?>
