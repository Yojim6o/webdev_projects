<!DOCTYPE html>
<html lang="en">
<html>
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project 4-1</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
		<div>
			<?php

			$xml = simplexml_load_file("../../plant_catalog.xml");

			$fp = fopen('plants.json', 'c+');
    		fwrite($fp, json_encode($xml));
    		fclose($fp);

			?>
		</div>
	</body>
</html>