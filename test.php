<?php
	if (!file_exists('./secure/data')) 
		file_put_contents('./secure/data', null);
	session_start();
	$data = unserialize(file_get_contents('./secure/data'));
	$temp['soil1a'] = 1;
	$temp['soil1t'] = 1;
	$temp['soil1o'] = 1;
	$temp['soil1'] = "Magic";
	$temp['soil1p'] = 10;

	$temp['soil2a'] = 1;
	$temp['soil2t'] = 2;
	$temp['soil2o'] = 2;
	$temp['soil2'] = "Serenity";
	$temp['soil2p'] = 20;

	$temp['soil3a'] = 1;
	$temp['soil3t'] = 3;
	$temp['soil3o'] = 3;
	$temp['soil3'] = "Tranquility";
	$temp['soil3p'] = 60;

	$temp['soil4a'] = 1;
	$temp['soil4t'] = 4;
	$temp['soil4o'] = 4;
	$temp['soil4'] = "Transformation";
	$temp['soil4p'] = 32;

	$temp['soil5a'] = 1;
	$temp['soil5t'] = 1;
	$temp['soil5o'] = 4;
	$temp['soil5'] = "Freedom";
	$temp['soil5p'] = 40;

	$temp['soil6a'] = 1;
	$temp['soil6t'] = 2;
	$temp['soil6o'] = 3;
	$temp['soil6'] = "Determination";
	$temp['soil6p'] = 70;

	$temp['soil7a'] = 1;
	$temp['soil7t'] = 3;
	$temp['soil7o'] = 2;
	$temp['soil7'] = "Might";
	$temp['soil7p'] = 20;

	$temp['soil8a'] = 1;
	$temp['soil8t'] = 4;
	$temp['soil8o'] = 1;
	$temp['soil8'] = "Guilt";
	$temp['soil8p'] = 69;

	$temp['soil9a'] = 1;
	$temp['soil9t'] = 2;
	$temp['soil9o'] = 4;
	$temp['soil9'] = "Purity";
	$temp['soil9p'] = 42;
	$data = $temp;
	file_put_contents('./secure/data', serialize($data));
	echo "Finished";
	
?>