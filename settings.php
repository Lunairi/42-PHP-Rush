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

	<form class="main-container" action="changepassword.php" method="POST">
		<div class="title">Change password:</div>
		<table>

			<tr>
				<td class="pre-input">Username: </td>
				<td><input type="text" name="login" value="" /></td>
			</tr>

			<tr>
				<td class="pre-input">Old Password: </td>
				<td><input type="password" name="oldpassword" value="" ></td>
			</tr>

			<tr>
				<td class="pre-input">New Password: </td>
				<td><input type="password" name="newpassword" value="" ></td>
			</tr>

			<tr>
				<td class="pre-input">Confirm: </td>
				<td><input type="password" name="newpassword2" value="" ></td>
			</tr>

		</table>
		<input type="submit" name="submit" value="Change Password"/>	
	</form>

</body>

</html>