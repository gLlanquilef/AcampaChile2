<html>
<head>
<title>PRUEBA COMO LLEGAR ACAMPACHILE</title>
<style type="text/css">
#mapa {
margin-right: 0;
height: 400px;
width: 400px;
float:left;
}
#directions-panel {
height: 400px;
float: right;
width: 400px;
overflow: auto;
margin:0;
}
</style>
<script src="http://j.maxmind.com/app/geoip.js"></script>
<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCfgHW80sKgTPYLReDPedZ65HjCQyzOPTA&signed_in=false"></script>
<script type="text/javascript" >

var map;
var myPos;
var directionsRenderer;
var directionsService = new google.maps.DirectionsService();

if (navigator && navigator.geolocation) {
navigator.geolocation.getCurrentPosition(geoOK, geoKO);
} else {
geoMaxmind();
}
function geoOK(position) {
showMap(position.coords.latitude, position.coords.longitude);
}
function geoMaxmind() {
showMap(geoip_latitude(), geoip_longitude());
}

function geoKO(err) {
if (err.code == 1) {
error('El usuario ha denegado el permiso para obtener informacion de ubicacion.');
} else if (err.code == 2) {
error('Tu ubicacion no se puede determinar.');
} else if (err.code == 3) {
error('TimeOut.')
} else {
error(' ocurrio un error.');
}
}

function showMap(lat, longi) {

myPos = new google.maps.LatLng(lat,longi);
var myOptions = {
zoom: 15,
center: myPos,
mapTypeId: google.maps.MapTypeId.ROADMAP,
}

map = new google.maps.Map(document.getElementById("mapa"), myOptions);

var marker = new google.maps.Marker({
position: myPos,
title:"Aqui Estoy",
draggable:false,
animation: google.maps.Animation.BOUNCE
});

marker.setMap(map);

directionsRenderer = new google.maps.DirectionsRenderer();

directionsRenderer.setMap(map);

directionsRenderer.setPanel(document.getElementById('directions-panel'));
}

function travelToAddress(){

//Obtenemos la direccion

directionsService = new google.maps.DirectionsService();

// opciones de busqueda
var request = {
origin: myPos,
destination: ("-42.591874, -73.614593"),
travelMode: google.maps.DirectionsTravelMode.DRIVING
};

directionsService.route(request,getRuta);
}

function getRuta(result, status){

if (status == google.maps.DirectionsStatus.OK) {
directionsRenderer.setDirections(result);
} else {
error("Ha ocurrido un error debido a : " + status);
}

function error(msg) {
alert(msg);
}}
</script>
</head>
<body>
<h1>Trabajando en Esto... </h1>
<form>
<table width="46%" border="0">
  <tr>
    <td colspan="2"><div align="center">
      <input type="text"  name="address" />
      <input type="button" value="Ir a Aldachildo" onClick="travelToAddress();"/>
    </div></td>
  </tr>
 
  <tr>
    <td><div id="mapa" >
      <div align="center"></div>
    </div></td>
  <td><div id="directions-panel" ></div></td>
  </tr>
</table>

</form>



</body>
</html>