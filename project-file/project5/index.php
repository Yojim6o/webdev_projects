<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Project 5</title>
		<link rel="stylesheet" href="./css/bootstrap.css" />
		<link rel="stylesheet" href="./css/mystyle.css" />
	</head>
	<body>
		<div class="header">
			<button id="shady" type="button" class="btn btn-default">Mostly Shady</button>
			<button id="sunny" type="button" class="btn btn-default">Mostly Sunny</button>
			<button id="alldata" type="button" class="btn btn-default">All</button>
		</div>
		<div id="appendToMe"></div>
		<script type="text/javascript">

			var Plants;

			function reqListener() {
				Plants = Plants || JSON.parse(this.responseText)['PLANT'];
			}

			function createCards(light) {
				if (typeof(light) === 'undefined') {
					light = 'All';
				}
				//remove cards.
				for (var plant = 0; plant < Plants.length; plant++) {
					if (Plants[plant]['LIGHT'] === light || light === 'All') {
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
				}
			}

			//need to move this to an on load type function.  want an init function and loadlistener function.
			function init() {
				var oReq = new XMLHttpRequest();
				oReq.addEventListener("load", reqListener);
				oReq.open("GET", "plants.json");
				oReq.send();
			}

			function addAllListeners() {
				var sunny = document.getElementById('sunny');
				var shady = document.getElementById('shady');
				var alldata = document.getElementById('alldata');

				sunny.addEventListener('click', function() {
				  createCards('Mostly Sunny');
				}, false);

				shady.addEventListener('click', function() {
				  createCards('Mostly Shady');
				}, false);

				alldata.addEventListener('click', function() {
				  createCards('All');
				}, false); 
			}

			init();

			setTimeout(function() {
				addAllListeners();
			}, 16);

		</script>
	</body>
</html>
