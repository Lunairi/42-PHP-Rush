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

<?php require('./navbar.php') ?>

	<form class="main-container" action="#" method="POST">

	<?php

	if ($_SESSION['logged_on'] && $_SESSION['buy'] == 2)
	{
		echo "Your order has been placed! Here is your receipt:";
		echo '<br><br>';
		$checkout = array_reverse(unserialize(file_get_contents('./secure/checkout')));
		foreach ($checkout as $key => $arg) 
		{
			if ($_SESSION['logged_on'] === $arg['login'])
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
				echo '<br>';
				$totalprice = $checkout[$key]['price1'] + $checkout[$key]['price2'] + $checkout[$key]['price3'] + $checkout[$key]['price4'] + $checkout[$key]['price5'] + $checkout[$key]['price6'] + $checkout[$key]['price7'] + $checkout[$key]['price8'] + $checkout[$key]['price9'];
				echo 'Final Sale: $' . $totalprice . '.';
				echo '<br><br>Thank you for your patronage!<br><br>';
				echo '<td><a href="./index.php">Back to home page</a></td>';
				$_SESSION['buy'] = "";
				exit;
			}
		}
		echo '<br><td><a href="./index.php">Return front page</a></td>';
		echo '</form>';
	}
	else
		echo "No purchases made.";
	$_SESSION['buy'] = "";
	?>

	</form>



</body>

</html>