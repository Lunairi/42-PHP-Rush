<?php

	session_start();
	if ($_SESSION['logged_on'])
	{
		$basket = unserialize(file_get_contents('./secure/basket'));
		$data = unserialize(file_get_contents('./secure/data'));
		$checkout = unserialize(file_get_contents('./secure/checkout'));
		$temp['login'] = $_SESSION['logged_on'];
		foreach ($basket as $key => $arg)
		{
			if ($arg['login'] === $_SESSION['logged_on'])
				$cart = 1; 
			if ($cart && !$buy)
			{
				$buy = 1;
				if ($basket[$key]['soil1'] > 0)
				{
					$temp['soil1'] = $data['soil1']; // name
					$temp['soil1q'] = $basket[$key]['soil1']; // quantity
					$temp['price1'] = $basket[$key]['soil1'] * $data['soil1p']; // price
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil2'] > 0)
				{
					$temp['soil2'] = $data['soil2'];
					$temp['soil2q'] = $basket[$key]['soil2'];
					$temp['price2'] = $basket[$key]['soil2'] * $data['soil2p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil3'] > 0)
				{
					$temp['soil3'] = $data['soil3'];
					$temp['soil3q'] = $basket[$key]['soil3'];
					$temp['price3'] = $basket[$key]['soil3'] * $data['soil3p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil4'] > 0)
				{
					$temp['soil4'] = $data['soil4'];
					$temp['soil4q'] = $basket[$key]['soil4'];
					$temp['price4'] = $basket[$key]['soil4'] * $data['soil4p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil5'] > 0)
				{
					$temp['soil5'] = $data['soil5'];
					$temp['soil5q'] = $basket[$key]['soil5'];
					$temp['price5'] = $basket[$key]['soil5'] * $data['soil5p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil6'] > 0)
				{
					$temp['soil6'] = $data['soil6'];
					$temp['soil6q'] = $basket[$key]['soil6'];
					$temp['price6'] = $basket[$key]['soil6'] * $data['soil6p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil7'] > 0)
				{
					$temp['soil7'] = $data['soil7'];
					$temp['soil7q'] = $basket[$key]['soil7'];
					$temp['price7'] = $basket[$key]['soil7'] * $data['soil7p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil8'] > 0)
				{
					$temp['soil8'] = $data['soil8'];
					$temp['soil8q'] = $basket[$key]['soil8'];
					$temp['price8'] = $basket[$key]['soil8'] * $data['soil8p'];
					$_SESSION['buy'] = 1;
				}
				if ($basket[$key]['soil9'] > 0)
				{
					$temp['soil9'] = $data['soil9'];
					$temp['soil9q'] = $basket[$key]['soil9'];
					$temp['price9'] = $basket[$key]['soil9'] * $data['soil9p'];
					$_SESSION['buy'] = 1;
				}
				if ($_SESSION['buy'] == 1)
				{
					$checkout[] = $temp;
					file_put_contents('./secure/checkout', serialize($checkout));
					foreach ($basket as $key2 => $arg2) 
						if ($arg2['login'] === $_SESSION['logged_on']) 
						{
							unset($basket[$key2]);
							file_put_contents('./secure/basket', serialize($basket));
							$_SESSION['buy'] = 2;
						}
				}
			}
		}
	}
	header('Location: receipt.php');
	exit;
?>
