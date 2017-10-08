<?php
	
$cart = 0;
$disp = 0;
	session_start();
	if ($_SESSION['logged_on'])
	{
		$basket = unserialize(file_get_contents('../secure/basket'));
		foreach ($basket as $key => $arg) 
		{
			if ($arg['login'] === $_SESSION['logged_on'])
				$cart = 1;
			if ($cart && !$disp)
			{
				$disp = 1;
				if ($basket[$key]['eggplant'] > 0)
					echo "Eggplant: " . $basket[$key]['eggplant'] . ".\n";
				if ($basket[$key]['cucumber'] > 0)
					echo "Cucumber: " . $basket[$key]['cucumber'] . ".\n";
			}
		}
	}
	else
		echo "You must be logged in to view cart.";
	print_r($basket);
?>
	<br/><a href="./index.html">Return home</a><br/>