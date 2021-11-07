<!DOCTYPE html>
<html>
<head>
	<title>Localización</title>
</head>
<body>
	<div id="map" style="height: 300px; width: 30%;">
		
	</div>
	<script type="text/javascript">
		function iniciarMap(){
			var coord = {lat:25.463841202169533 ,lng: -100.9618960436142}
			var map = new google.maps.Map(document.getElementById('map'),{
				zoom: 15,
				center: coord
			});
			var marker = new google.maps.Marker({
      		position: coord,
      		map: map
    		});
		}
	</script>
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBDaeWicvigtP9xPv919E-RNoxfvC-Hqik&callback=iniciarMap"></script>
</body>
</html>