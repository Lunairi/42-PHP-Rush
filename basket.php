<?php

	session_start();

?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Best dirt in town</title>
	<link rel="stylesheet" type="text/css" href="./styles/base.css">
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
</head>

<body>

	<nav>
		Dirt... just dirt.
		<ul><a href="./index.php">Dirt<img src="./src/logo.png" /></a>
			<div class="dropdown-content">
				<a href="./login.php"><li>Login</li></a>
				<a href="./settings.php"><li>Settings</li></a>
				<a href="./basket.php"><li>Basket</li></a>
				<a href="./checkout.php"><li>Checkout</li></a>
			</div>
		</ul>
	</nav>

	<div class="main-container catalog">

	<?php

	if (!$_SESSION['logged_on'])
		echo "You must be logged in to view this.";
	else
	{
		$basket = unserialize(file_get_contents('./secure/basket'));
		foreach ($basket as $key => $arg) 
		{
			if ($arg['login'] === $_SESSION['logged_on'])
				$cart = 1;
			if ($cart && !$disp)
			{
				$disp = 1;
				if ($basket[$key]['soil1'] > 0)
					echo "Magic: " . $basket[$key]['soil1'] . ".\n\n";
				if ($basket[$key]['soil2'] > 0)
					echo "Serenity: " . $basket[$key]['soil2'] . ".\n\n";
				if ($basket[$key]['soil3'] > 0)
					echo "Tranquilty: " . $basket[$key]['soil3'] . ".\n\n";
				if ($basket[$key]['soil4'] > 0)
					echo "Transformation: " . $basket[$key]['soil4'] . ".\n\n";
				if ($basket[$key]['soil5'] > 0)
					echo "Freedom: " . $basket[$key]['soil5'] . ".\n\n";
				if ($basket[$key]['soil6'] > 0)
					echo "Determination: " . $basket[$key]['soil6'] . ".\n\n";
				if ($basket[$key]['soil7'] > 0)
					echo "Might: " . $basket[$key]['soil7'] . ".\n\n";
				if ($basket[$key]['soil8'] > 0)
					echo "Guilt: " . $basket[$key]['soil8'] . ".\n\n";
				if ($basket[$key]['soil9'] > 0)
					echo "Purity: " . $basket[$key]['soil9'] . ".\n\n";
			}
		}
	}

	?>

	</div>

</body>

</html>
