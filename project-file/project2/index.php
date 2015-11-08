<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Project 2</title>
	<link rel="stylesheet" href="css/bootstrap.css">
	<link rel="stylesheet" href="css/mystyle.css">
</head>
<body>
	<p>
		<?php
		$plants = json_decode(
			json_encode(
				simplexml_load_string(file_get_contents("../../plant_catalog.xml")
			)
		), true);

		foreach($plants['PLANT'] as $a_plant) {
			echo '<div class="col-md-4"><div class="card"><h1>'.$a_plant['COMMON'].'</h1>';
			unset($a_plant['COMMON']);
			echo '<div>';
			foreach($a_plant as $key => $val) {
				echo '<p>'.$key.': '.$val.'</p>';
			}
			echo '</div></div></div>';
		}
		?>
	</p>
</body>
</html>
