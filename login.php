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


	<form class="main-container" action="access.php" method="POST">

<?
	if ($_SESSION['creation'])
		echo "<div class='title'>Account has been created successfully.</div>";
	else if ($_SESSION['access'] == 1)
		echo "You are now logged in.\n";
	else if ($_SESSION['access'] == 2)
		echo "Information is not correct.\n";
	else
		echo '<div class="title">Enter login information:</div>';
	$_SESSION['creation'] = "";
	$_SESSION['access'] = "";
?>

		<table>

			<tr>
				<td class="pre-input">Username: </td>
				<td><input type="text" name="login" value="" /></td>
			</tr>

			<tr>
				<td class="pre-input">Password: </td>
				<td><input type="password" name="password" value="" ></td>
			</tr>

			<tr>
				<td><input type="submit" name="submit" value="Log In"/></td>
				<td><a href="./newaccount.php">New Account</a></td>
			</tr>

		</table>		
	</form>

</body>

</html>