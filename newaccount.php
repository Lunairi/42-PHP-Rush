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

	<form class="main-container" action="createaccount.php" method="POST">

<?php
	if ($_SESSION['creation'])
	{
		if ($_SESSION['creation'] === 1)
			echo "<div class='title'>Account already exists.</div>";
		else if ($_SESSION['creation'] === 2)
			echo "<div class='title'>Passwords must match when creating account.</div>";
		else
			echo "<div class='title'>You must fill out all the fields.</div>";
		$_SESSION['creation'] = "";
	}
	else
		echo '<div class="title">Enter login information:</div>';
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
				<td class="pre-input">Confirm: </td>
				<td><input type="password" name="password2" value="" ></td>
			</tr>

		</table>		
		<input type="submit" name="submit" value="Create Account"/>
	</form>

</body>

</html>

