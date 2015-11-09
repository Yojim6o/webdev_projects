<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project 4-2</title>
		<link rel="stylesheet" href="./css/bootstrap.css" />
		<link rel="stylesheet" href="./css/mystyle.css" />
	</head>
	<body>
		<div id="appendToMe"></div>
		<script type="text/javascript">

			function reqListener () {
				var Plants = JSON.parse(this.responseText)['PLANT'];

				for (var plant = 0; plant < Plants.length; plant++) {
					var node = document.createElement('div');
					var mkUp =  '<div class="col-md-4"><div class="card"><h1>' 
					+ Plants[plant]['COMMON'] + '</h1><div> <p>Botanical: ' 
					+ Plants[plant]['BOTANICAL'] + '</p> <p>Zone: ' + Plants[plant]['ZONE'] 
					+ '</p> <p>Light: ' + Plants[plant]['LIGHT'] +'</p> <p>Price: ' 
					+ Plants[plant]['PRICE'] + '</p> <p>Availability: ' 
					+ Plants[plant]['AVAILABILITY'] +'</p> </div></div></div>';

					node.innerHTML = mkUp;

					var el = document.getElementById('appendToMe');

					el.appendChild(node);
				}
			};

			var oReq = new XMLHttpRequest();
			oReq.addEventListener("load", reqListener);
			oReq.open("GET", "plants.json");
			oReq.send();

		</script>
	</body>
</html>
