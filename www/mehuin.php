<!DOCTYPE html>
<html>
	<head>
		<title>Rehue Lafquen</title>
		<meta name="viewport" content="initial-scale=1.0, user-scalable=no">
		<meta charset="utf-8">
		<meta http-equiv="Content-Style-Type" content="text/css">
		<meta http-equiv="content-type" content="text/html; charset=utf-8" />
		<meta name="description" content="" />
		<meta name="keywords" content="" />
		<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&signed_in=true"></script>
		<script src="js/skel.min.js"></script>
		<script src="js/skel-panels.min.js"></script>
		<script src="js/init.js"></script>
		<script src="js/galleryJS/modernizr.custom.js"></script>
		<script src="js/galleryJS/jquery.cbpFWSlider.min.js"></script>
		<script src="Bootstrap/js/bootstrap.js"></script>
		<script src="Bootstrap/bootstrap.min.js"></script>
		<link href="Bootstrap/css/bootstrap.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap.min.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.css" rel="stylesheet" media="screen">
		<link href="Bootstrap/css/bootstrap-theme.min.css" rel="stylesheet" media="screen">
		<link rel="stylesheet" href="css/galleryCss/default.css"/>
		<link rel="stylesheet" href="css/galleryCss/component.css"/>
		<link href="css/global.css" rel="stylesheet" type="text/css">
		<style>
			body{
				background-image: url("imagenes/Background/background.jpg") !important;
				height: 100% !important;
				width: 100% !important;
				background-attachment: fixed !important;
				background-repeat: no-repeat !important;
			}
		</style>
	</head>
	<!--body-->
	<body>
		<div id="background">
			<!--Header -->
			<div id="header">
				<div id="nav-wrapper"> 
				<!-- Nav -->
					<nav id="nav">
						<ul>
							<li class="active"><a href="index.php">Inicio</a></li>
							<li><a href="contacto.php">Contacto</a></li>
						</ul>
					</nav>
					<!-- Nav -->
				</div>
				<div id="banner"><a href="index.php" class="image featured"><img src="imagenes/Campings/banner_AC.png"></a></div></div>
			</div>
			<!--/Header -->
			
			<!--Main body-->
			<div id="main">
				<h1>Camping</br>Rehue Lafquen<h1>
			</div>
			<!--/Main body-->
			
			<!--Description Container-->
			<div class="container">
				<div class="row">
					<div class="col-md-12">
						<h2>Descripción del Camping</h2>
					</div>
				</div>
				<div class="row">
					<!--Elemento 1-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Ubicación:</h2>
						</div>
						<div class="col-md-8">
							<h3>Mehuín, Comuna de Mariquina, Región de Los Ríos.</h3>
						</div>
					</div>
					
					<!-- Elemento 2-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Precio (CLP):</h2>
						</div>
						<div class="col-md-8">
							<h3>$10.000.- (por sitio).</h3>
						</div>
					</div>
					<!-- Elemento 3-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Fono contacto:</h2>
						</div>
						<div class="col-md-8">
							<h3>+56 9 64511919</h3>
						</div>
					</div>
					<!-- Elemento 4-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Correo contacto:</h2>
						</div>
						<div class="col-md-8">
							<h3>rehuelafquen@gmail.com</h3>
						</div>
					</div>
					<!-- Elemento 5-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Servicios:</h2>
						</div>
						<div class="col-md-8">
							<h3>Electricidad, Baños, Duchas, Estacionamiento.</h3>
						</div>
					</div>
					<!-- Elemento 6-->
					<div class="col-md-12">
						<div class="col-md-4">
							<h2>Descripción:</h2>
						</div>
						<div class="col-md-8">
							<h3>Camping perteneciente a una comunidad indigena, enmarcado en la recuperacion de tierras ancestrales, ubicado a lado de la playa, 100% confiable y seguro. Visitenos.</h3>
						</div>
					</div>
				</div>
			</div>
			<!--/Description Container-->
			
			<!--Gallery slider-->
			<div class="container">
				<header class="clearfix"></header>
				<div id="cbp-fwslider" class="cbp-fwslider">
					<ul>
						<li><a href="#"><img src="images/galleryImages/Mehuin1.jpg" alt="img01"/></a></li>
						<li><a href="#"><img src="images/galleryImages/Mehuin2.jpg" alt="img02"/></a></li>
						<li><a href="#"><img src="images/galleryImages/Mehuin3.jpg" alt="img03"/></a></li>
					</ul>
				</div>
			</div>
			<!--/Gallery slider-->
			
			<!--Map canvas-->
			<div id="map">	
				<div class="theme-showcase" role="main">
					<div class="panel panel-default">
						<div class="panel-heading">Mapa</div>
						<div class="panel-footer">
							<div id="map_canvas" style="width: 100%; height: 400px"></div>
						</div>
					</div><br />
				</div>
			</div>
			<!--/Map canvas-->
			
			<!--Road Instructions-->
			<div id="directions-panel">
				<div class="panel panel-default">
					<div class="panel-heading">Indicaciones</div>
					<div class="panel-footer">
						<div id="panel_ruta" style="overflow: auto;"></div>
					</div>
				</div>
			</div>
			<!--/Road Instructions-->
		</div>
	</body>
	<!--/body-->
	
	<!--GoogleMaps script-->
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
				mapTypeId: google.maps.MapTypeId.ROADMAP
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
			var end =  new google.maps.LatLng(-39.4284242,-73.2293456);   
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
	<!--/GoogleMaps script-->
	
	<!--Gallery script-->
	<script>
	$( function() {
		$( '#cbp-fwslider' ).cbpFWSlider();
	} );
	</script>
	<!--Gallery script-->
</html>