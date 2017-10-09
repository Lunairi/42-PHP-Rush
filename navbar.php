<?php
    session_start();
?>

<nav>
	<a href="./index.php">Dirt... just dirt.</a>
	<?php
		if ($_SESSION['logged_on'])
			echo "<p class='userlog'>Logged in as: <br>" . $_SESSION['logged_on'] . "</p>";
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
			<a href="./history.php"><li>History</li></a>
		</div>
	</ul>
</nav>