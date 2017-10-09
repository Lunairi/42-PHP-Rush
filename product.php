<?PHP
	session_start();
?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Best dirt in town</title>
	<link rel="stylesheet" type="text/css" href="./styles/base.css">
</head>

<body>

	<nav>
		<a href="./index.php">Dirt... just dirt.</a>
		<?php
			if ($_SESSION['logged_on'])
			{
				echo '<p class="userlog">';
				echo $_SESSION['logged_on'];
				echo '</p>';
			}
		?>
		<ul><a href="./index.php">Dirt<img src="./src/logo.png" /></a>
			<div class="dropdown-content">
			<?php
				if (!$_SESSION['logged_on'])
					echo'<a href="./login.php"><li>Login</li></a>';
				else
					echo'<a href="./logout.php"><li>Logout</li></a>';
			?>
				<a href="./settings.php"><li>Settings</li></a>
				<a href="./basket.php"><li>Basket</li></a>
				<a href="./checkout.php"><li>Checkout</li></a>
			</div>
		</ul>
	</nav>

	<form class="main-container" action="#" method="POST">

	<?php

	if ($_SESSION['logged_on'] === "admin")
	{
		echo "Order History";
		echo '<br><br>';
		$checkout = unserialize(file_get_contents('./secure/checkout'));
		foreach ($checkout as $key => $arg) 
		{
			if ($checkout[$key]['soil1q'] > 0)
			{
				echo '' . $checkout[$key]['soil1'] . ': ' . $checkout[$key]['soil1q'] . ' purchased. Total price: $' . $checkout[$key]['price1'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil2q'] > 0)
			{
				echo '' . $checkout[$key]['soil2'] . ': ' . $checkout[$key]['soil2q'] . ' purchased. Total price: $' . $checkout[$key]['price2'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil3q'] > 0)
			{
				echo '' . $checkout[$key]['soil3'] . ': ' . $checkout[$key]['soil3q'] . ' purchased. Total price: $' . $checkout[$key]['price3'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil4q'] > 0)
			{
				echo '' . $checkout[$key]['soil4'] . ': ' . $checkout[$key]['soil4q'] . ' purchased. Total price: $' . $checkout[$key]['price4'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil5q'] > 0)
			{
				echo '' . $checkout[$key]['soil5'] . ': ' . $checkout[$key]['soil5q'] . ' purchased. Total price: $' . $checkout[$key]['price5'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil6q'] > 0)
			{
				echo '' . $checkout[$key]['soil6'] . ': ' . $checkout[$key]['soil6q'] . ' purchased. Total price: $' . $checkout[$key]['price6'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil7q'] > 0)
			{
				echo '' . $checkout[$key]['soil7'] . ': ' . $checkout[$key]['soil7q'] . ' purchased. Total price: $' . $checkout[$key]['price7'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil8q'] > 0)
			{
				echo '' . $checkout[$key]['soil8'] . ': ' . $checkout[$key]['soil8q'] . ' purchased. Total price: $' . $checkout[$key]['price8'] . '.';
				echo '<br>';
			}
			if ($checkout[$key]['soil9q'] > 0)
			{
				echo '' . $checkout[$key]['soil9'] . ': ' . $checkout[$key]['soil9q'] . ' purchased. Total price: $' . $checkout[$key]['price9'] . '.';
				echo '<br>';
			}
			$totalprice = $checkout[$key]['price1'] + $checkout[$key]['price2'] + $checkout[$key]['price3'] + $checkout[$key]['price4'] + $checkout[$key]['price5'] + $checkout[$key]['price6'] + $checkout[$key]['price7'] + $checkout[$key]['price8'] + $checkout[$key]['price9'];
			$final += $totalprice;
			echo 'Final Sale: $' . $totalprice . '.<br><br>';
		}
		echo '<br>Total Sale Profit: $' . $final . '.<br>';
		echo '<br><td><a href="./settings.php">Back to Settings</a></td>';
	}
	else
		echo "Forbidden Access";
	?>

	</form>



</body>

</html>