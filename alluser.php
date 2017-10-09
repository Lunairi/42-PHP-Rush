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

	if ($_SESSION['logged_on'] === "admin")
	{
		echo "User List";
		echo '<br><br>';
		$account = unserialize(file_get_contents('./secure/password'));
		if ($account) 
			foreach ($account as $key => $arg) 
			{
				echo "User: " . $account[$key]['login'] . ".";
				echo '<br>';
			}
		echo '<br><td><a href="./settings.php">Back to Settings</a></td>';
	}
	else
		echo "Forbidden Access";
	?>

	</form>



</body>

</html>