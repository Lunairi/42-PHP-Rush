<?php

	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_GET['update'])
		{
			$basket = unserialize(file_get_contents('./secure/basket'));
			$temp['login'] = $_SESSION['logged_on'];
			foreach ($basket as $key => $arg)
			{
				if ($arg['login'] === $_SESSION['logged_on'])
					$cart = 1;
				if ($cart && !$add)
				{
					$add = 1;
					if ($_GET['soil1'] || $_GET['soil1'] == 0)
					{
						$basket[$key]['soil1'] = ($_GET['soil1'] * 1);
						if ($_GET['soil1'] < 1)
							unset($basket[$key]['soil1']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil2'] || $_GET['soil2'] == 0)
					{
						$basket[$key]['soil2'] = ($_GET['soil2'] * 1);
						if ($_GET['soil2'] < 1)
							unset($basket[$key]['soil2']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil3'] || $_GET['soil3'] == 0)
					{
						$basket[$key]['soil3'] = ($_GET['soil3'] * 1);
						if ($_GET['soil3'] < 1)
							unset($basket[$key]['soil3']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil4'] || $_GET['soil4'] == 0)
					{
						$basket[$key]['soil4'] = ($_GET['soil4'] * 1);
						if ($_GET['soil4'] < 1)
							unset($basket[$key]['soil4']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil5'] || $_GET['soil5'] == 0)
					{
						$basket[$key]['soil5'] = ($_GET['soil5'] * 1);
						if ($_GET['soil5'] < 1)
							unset($basket[$key]['soil5']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil6'] || $_GET['soil6'] == 0)
					{
						$basket[$key]['soil6'] = ($_GET['soil6'] * 1);
						if ($_GET['soil6'] < 1)
							unset($basket[$key]['soil6']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil7'] || $_GET['soil7'] == 0)
					{
						$basket[$key]['soil7'] = ($_GET['soil7'] * 1);
						if ($_GET['soil7'] < 1)
							unset($basket[$key]['soil7']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil8'] || $_GET['soil8'] == 0)
					{
						$basket[$key]['soil8'] = ($_GET['soil8'] * 1);
						if ($_GET['soil8'] < 1)
							unset($basket[$key]['soil8']);
						$_SESSION['edit'] = 1;
					}
					if ($_GET['soil9'] || $_GET['soil9'] == 0)
					{
						$basket[$key]['soil9'] = ($_GET['soil9'] * 1);
						if ($_GET['soil9'] < 1)
							unset($basket[$key]['soil9']);
						$_SESSION['edit'] = 1;
					}
					file_put_contents('./secure/basket', serialize($basket));
				}
			}
		}
	}
	header('Location: basket.php');
	exit;
?>
