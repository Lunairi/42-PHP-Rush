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

	<form class="main-container" action="setcategory.php" method="POST">
	<?php
		echo'<table>
			<tr>
				<td class="pre-input">Origin: </td>
				<td><input type="input" name="origin" value="" ></td>
			</tr>

			<tr>
				<td class="pre-input">Texture: </td>
				<td><input type="input" name="texture" value="" ></td>
			</tr>

			</table>
			<input type="submit" name="submit" value="Change Password"/>	';
	?>
	</form>



</body>

</html>