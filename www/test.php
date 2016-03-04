<!DOCTYPE html>
<html>
	<head>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<title>Aldachildo</title>
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/galleryJS/modernizr.custom.js"></script>
		<script src="js/galleryJS/jquery.cbpFWSlider.min.js"></script> 
		<link rel="stylesheet" href="css/galleryCss/default.css"/>
		<link rel="stylesheet" href="css/galleryCss/component.css"/>
	

		
		
	
	</div>
	<script>
		var map = null;
		var directionsDisplay = null;
		var directionsService = null;
		var latlon = null;
		function initialize() {
			var myLatlng = new google.maps.LatLng(-38.7447161, -72.6092453);
			var myOptions = {
				zoom: 4,
				center: myLatlng,
				mapTypeId: google.maps.MapTypeId.ROADMAP,
				clickable: false
			};
			map = new google.maps.Map($("#map_canvas").get(0), myOptions);
			directionsDisplay = new google.maps.DirectionsRenderer();
			directionsService = new google.maps.DirectionsService();
			getLocation();
		}
	
		function getLocation() {
			if (navigator.geolocation) {
				navigator.geolocation.getCurrentPosition(showPosition, showError);
			} else {
				x.innerHTML = "Geolocation is not supported by this browser.";
			}
		}
		
		function showPosition(position) {
			latlon = "("+position.coords.latitude + "," + position.coords.longitude+")";
			
			getDirections();
		}
		function showError(error) {
			switch(error.code) {
				case error.PERMISSION_DENIED:
					x.innerHTML = "User denied the request for Geolocation."
					break;
				case error.POSITION_UNAVAILABLE:
					x.innerHTML = "Location information is unavailable."
					break;
				case error.TIMEOUT:
					x.innerHTML = "The request to get user location timed out."
					break;
				case error.UNKNOWN_ERROR:
					x.innerHTML = "An unknown error occurred."
					break;
			}
		}
		function getDirections() {
			
			var start =  latlon;        
			var end =  new google.maps.LatLng(-42.650251, -73.736705);   
			if (!start || !end) {
				alert("Start and End addresses are required");
				return;
			}
			var request = {
				origin: start,
				destination: end,
				travelMode: google.maps.DirectionsTravelMode["DRIVING"],
				unitSystem: google.maps.DirectionsUnitSystem["METRIC"],
				provideRouteAlternatives: true
			};
			directionsService.route(request, function (response, status) {
				if (status == google.maps.DirectionsStatus.OK) {
					directionsDisplay.setMap(map);
					directionsDisplay.setPanel($("#panel_ruta").get(0));
					directionsDisplay.setDirections(response);
				} else {
					alert("No hay direcciones disponibles entre estos dos puntos");
				}
			});
		}
	
		$(document).ready(function () {
			
		// getLocation();
			initialize();
			//getDirections();
			
		});
	</script>
	<script>
		$( function() {
			$( '#cbp-fwslider' ).cbpFWSlider();
		} );
	</script>
	
	<div class="container theme-showcase" role="main">
    <div class="panel panel-default">
        <div class="panel-heading">Mapa
        </div>
        <div class="panel-footer">
                <div id="map_canvas" style="width: 100%; height: 500px"></div>
        </div>
    </div>
    <br />
    <div class="panel panel-default">
        <div class="panel-heading">Indicaciones
        </div>
        <div class="panel-footer">
            <div id="panel_ruta" style="overflow: auto; width: 100%; height: 100%"></div>
        </div>
    </div>
</div>
	</body>
</html>