<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project 4-1</title>
		<link rel="stylesheet" href="css/bootstrap.css">
		<link rel="stylesheet" href="css/mystyle.css">
	</head>
	<body>
		<div class="header">
			<a href="index.php?type=Shady"><button type="button" class="btn btn-default">Mostly Shady</button></a>
			<a href="index.php?type=Sunny"><button type="button" class="btn btn-default">Mostly Sunny</button></a>
			<a href="index.php?type=alldata"><button type="button" class="btn btn-default">All</button></a>
		</div>
		<div>
			<?php

			$plants = json_decode(
				json_encode(
					simplexml_load_string(file_get_contents("../../plant_catalog.xml")
				)
			), true);

			if (isset($_GET['type'])) {
				$theType = $_GET['type'];
			} else {
				$theType = null;
			}

			// $theType = (isset($_GET['type']) ? $_GET['type'] : null);

			foreach($plants['PLANT'] as $a_plant) {
				if (strpos($a_plant['LIGHT'], $theType) || $theType == "alldata") {
					echo '<div class="col-md-4"><div class="card"><h1>'.$a_plant['COMMON'].'</h1>';
					unset($a_plant['COMMON']);
					echo '<div>';
					foreach($a_plant as $key => $val) {
						echo '<p>'.$key.': '.$val.'</p>';
					}
					echo '</div></div></div>';
				} 
			}

			?>
		</div>
	</body>
</html>
