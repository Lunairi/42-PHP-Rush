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
			echo '<div class="title">Delete your account:</div>';
		$_SESSION['delete'] = "";

		echo '<table>

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

	if ($_SESSION['logged_on'] === "admin")
	{
		echo '<form class="main-container" action="admincreate.php" method="POST">';
		if ($_SESSION['acreate'] === 1)
			echo "<div class='title'>Account already exists.</div>";
		else if ($_SESSION['acreate'] === 2)
			echo "<div class='title'>Passwords must match when creating account.</div>";
		else if ($_SESSION['acreate'] === 3)
			echo "<div class='title'>User account has been created.</div>";
		else if ($_SESSION['acreate'] === 4)
			echo "<div class='title'>You must fill out all the fields.</div>";
		else
			echo '<div class="title">Admin Panel: Create User Account</div>';
		$_SESSION['acreate'] = "";
		echo '<table>

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
	</form>';

	}

	if ($_SESSION['logged_on'] === "admin")
	{
		echo '<form class="main-container" action="admindelete.php" method="POST">';
		if ($_SESSION['admin'] == 1)
			echo "Admin level accounts cannot be deleted.\n";
		else if ($_SESSION['admin'] == 2)
			echo "The user has been deleted.\n";
		else if ($_SESSION['admin'] == 3)
			echo "You must fill out all the fields.\n";
		else
			echo '<div class="title">Admin Panel: Delete User</div>';
		$_SESSION['admin'] = "";
		echo '<table>

			<tr>
				<td class="pre-input">Username </td>
				<td><input type="text" name="login" value="" ></td>
			</tr>

			<tr>
				<td class="pre-input">Reason For Annihilation </td>
				<td><input type="text" name="reason" value="" ></td>
			</tr>
			</table>
			<input type="submit" name="submit" value="Delete User"/>	
			</form>';
	}


	if ($_SESSION['logged_on'] === "admin")
	{
		echo '<form class="main-container" action="#" method="POST">';
		echo '<div class="title">Admin Panel: Tools</div>';
		echo '<td><a href="./alluser.php">List of Users</a></td>
			<td><a href="./log.php">Admin Logs</a></td>	
			<td><a href="./product.php">Product Orders</a></td>	
			<td><a href="./edit.php">Edit Product</a></td>	
			</form>';
	}

	?>




</body>

</html>