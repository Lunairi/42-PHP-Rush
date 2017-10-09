<?php

	session_start();
	if ($_SESSION['logged_on'] === "admin")
	{
		if ($_GET['edit'])
		{
			$data = unserialize(file_get_contents('./secure/data'));
			$data['soil1a'] = $_GET['available1'];
			$data['soil1t'] = $_GET['texture1'];
			$data['soil1o'] = $_GET['origin1'];
			$data['soil1'] = $_GET['name1'];
			$data['soil1p'] = $_GET['price1'];

			$data['soil2a'] = $_GET['available2'];
			$data['soil2t'] = $_GET['texture2'];
			$data['soil2o'] = $_GET['origin2'];
			$data['soil2'] = $_GET['name2'];
			$data['soil2p'] = $_GET['price2'];

			$data['soil3a'] = $_GET['available3'];
			$data['soil3t'] = $_GET['texture3'];
			$data['soil3o'] = $_GET['origin3'];
			$data['soil3'] = $_GET['name3'];
			$data['soil3p'] = $_GET['price3'];

			$data['soil4a'] = $_GET['available4'];
			$data['soil4t'] = $_GET['texture4'];
			$data['soil4o'] = $_GET['origin4'];
			$data['soil4'] = $_GET['name4'];
			$data['soil4p'] = $_GET['price4'];

			$data['soil5a'] = $_GET['available5'];
			$data['soil5t'] = $_GET['texture5'];
			$data['soil5o'] = $_GET['origin5'];
			$data['soil5'] = $_GET['name5'];
			$data['soil5p'] = $_GET['price5'];

			$data['soil6a'] = $_GET['available6'];
			$data['soil6t'] = $_GET['texture6'];
			$data['soil6o'] = $_GET['origin6'];
			$data['soil6'] = $_GET['name6'];
			$data['soil6p'] = $_GET['price6'];

			$data['soil7a'] = $_GET['available7'];
			$data['soil7t'] = $_GET['texture7'];
			$data['soil7o'] = $_GET['origin7'];
			$data['soil7'] = $_GET['name7'];
			$data['soil7p'] = $_GET['price7'];

			$data['soil8a'] = $_GET['available8'];
			$data['soil8t'] = $_GET['texture8'];
			$data['soil8o'] = $_GET['origin8'];
			$data['soil8'] = $_GET['name8'];
			$data['soil8p'] = $_GET['price8'];

			$data['soil9a'] = $_GET['available9'];
			$data['soil9t'] = $_GET['texture9'];
			$data['soil9o'] = $_GET['origin9'];
			$data['soil9'] = $_GET['name9'];
			$data['soil9p'] = $_GET['price9'];

			file_put_contents('./secure/data', serialize($data));
			$_SESSION['product'] = 1;
		}
	}
	header('Location: edit.php');
	exit;
?>
