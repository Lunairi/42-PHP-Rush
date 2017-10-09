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
		echo "Deletion Log";
		echo '<br><br>';
		$delete = unserialize(file_get_contents('./secure/deletelog'));
		foreach ($delete as $key => $arg) 
		{
			echo "User: " . $delete[$key]['login'] . "\n\n-\n\nReason: " . $delete[$key]['reason'] . "";
			echo '<br>';
		}
		echo '<br><td><a href="./settings.php">Back to Settings</a></td>';
		echo '</form>';
		echo '<form class="main-container" action="#" method="POST">';
		echo "Creation Log";
		echo '<br><br>';
		$create = unserialize(file_get_contents('./secure/createlog'));
		foreach ($create as $key2 => $arg2) 
		{
			echo "User: " . $create[$key2]['login'] . "\n\n-\n\nCreated by: admin";
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