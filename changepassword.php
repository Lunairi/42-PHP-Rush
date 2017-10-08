<?php
$exist = 0;
$check = 0;
$pwerror = 0;
	session_start();
	if ($_SESSION['logged_on'])
	{
		if ($_POST['login'] && $_POST['oldpassword'] && $_POST['newpassword'] && $_POST['newpassword2'] && $_POST['submit']) 
		{
			$check = 1;
			if ($_POST['newpassword'] != $_POST['newpassword2'])
				$pwerror = 1;
			$account = unserialize(file_get_contents('../secure/password'));
			if ($account && $pwerror != 1) 
			{
				foreach ($account as $key => $arg) 
				{
					if ($arg['login'] === $_POST['login'] && $arg['password'] === hash('whirlpool', $_POST['oldpassword'])) 
						$exist = 1;
				}
				if ($exist) 
				{
					$account[$key]['password'] =  hash('whirlpool', $_POST['newpassword']);
					file_put_contents('../secure/password', serialize($account));
					echo "Your password has changed.\n";
				} 
			} 
		}
		if (!$account)
		{
			echo "Account does not exist. Please create an account.\n";
		}
		else if ($pwerror == 1)
		{
			echo "New password does not match.\n";
		}
		else if ($exist != 1)
		{
			echo "Password is incorrect.\n";
		}
		else if ($check != 1)
		{
			echo "You must fill out all the forms.\n";
		}
	}
	else
	{
		echo "You must be logged in to perform this action.";
	}

?>

<!DOCTYPE HTML>

<html>

<head>
	<title>Best dirt in town</title>
	<link rel="stylesheet" type="text/css" href="./styles/base.css">
	<link rel="stylesheet" type="text/css" href="./styles/index.css">
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

	<div class="main-container">
		Password changed!
	</div>

</body>

</html>
