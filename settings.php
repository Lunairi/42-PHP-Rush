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

	<form class="main-container" action="changepassword.php" method="POST">

	<?php

	if ($_SESSION['changepw'] == 1)
		echo "Account does not exist. Please create an account.\n";
	else if ($_SESSION['changepw'] == 2)
		echo "New password does not match.\n";
	else if ($_SESSION['changepw'] == 3)
		echo "Password is incorrect.\n";
	else if ($_SESSION['changepw'] == 4)
		echo "You must fill out all the forms.\n";
	else if ($_SESSION['logged_on'])
		echo '<div class="title">Change password:</div>';
	else if ($_SESSION['delete'] == 1)
	{
		echo '<div class="title">The account has been deleted.</div>';
		echo '<tr>
				<td><a href="./index.php">Return to Front Page</a></td>
			</tr>';	
		$_SESSION['delete'] = "";
	}
	else
	{
		echo '<div class="title">You must be logged in to view this.</div>';
		echo '<tr>
		<td><a href="./login.php">Login Page</a></td>
				<td><a href="./index.php">Return to Front Page</a></td>
			</tr>';
	}
	$_SESSION['changepw'] = "";
	if ($_SESSION['logged_on'])
	{
		echo'<table>
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
			<input type="submit" name="submit" value="Change Password"/>	';
	}

	?>
	</form>
	<?php

	if ($_SESSION['logged_on'])
	{
		echo '<form class="main-container" action="deleteaccount.php" method="POST">';
		if ($_SESSION['delete'] == 3)
			echo "Passwords must match.\n";
		else if ($_SESSION['delete'] == 4)
			echo "The password is incorrect.\n";
		else if ($_SESSION['delete'] == 5)
			echo "You must fill out all the forms.\n";
		else if ($_SESSION['logged_on'])
			echo '<div class="title">Delete account (WARNING: IRREVERSIBLE) :</div>';
		$_SESSION['delete'] = "";

		echo'<table>

			<tr>
				<td class="pre-input">Password: </td>
				<td><input type="password" name="password" value="" ></td>
			</tr>

			<tr>
				<td class="pre-input">Confirm Password: </td>
				<td><input type="password" name="password2" value="" ></td>
			</tr>
			</table>
			<input type="submit" name="submit" value="Delete Account"/>	
			</form>';
	}

	?>


</body>

</html>