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


	<form class="main-container" action="quit.php" method="POST">

<?
	if ($_SESSION['quit'])
	{
		echo "You've logged out.";
		$_SESSION['quit'] = "";
		echo '<table>
			<tr>
				<td><a href="./index.php">Return to Front Page</a></td>
			</tr>';
	}
	else
	{
		echo "Log out?";
		echo '<table>

			<tr>
				<td><input type="submit" name="submit" value="Log Out"/></td>
				<td><a href="./index.php">Return to Front Page</a></td>
			</tr>';
	}
?>


		</table>		
	</form>

</body>

</html>