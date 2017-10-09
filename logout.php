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

	<form class="main-container" action="quit.php" method="POST">

<?php
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
		echo 'Log out?';
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