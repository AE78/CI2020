<div class="jumbotron text-center">
<div class="container-fluid" id="content_about">
	<h2>About</h2>

</div>

<!--<iframe
  width="600"
  height="450"
  frameborder="0" style="border:0"
  src="https://www.google.com/maps/embed/v1/place?key=API_KEY
    &q=" allowfullscreen>
</iframe>-->

<div id="LongLat">
	<p>Where are you?</p>
<p>Click the button to get your coordinates.</p>

<button onclick="getLocation()">Try It</button>

<p id="demo"></p>

<script>
var x = document.getElementById("demo");

function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(showPosition);
  } else { 
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}

function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude + 
  "<br>Longitude: " + position.coords.longitude;
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

function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center="+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyAsWlHyDBNk6Yk7GqwpwBMZIDZN4LagdIM";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}
</script>
<script>
var x = document.getElementById("demo");
function getLocation() {
  if (navigator.geolocation) {
    navigator.geolocation.watchPosition(showPosition);
  } else {
    x.innerHTML = "Geolocation is not supported by this browser.";
  }
}
function showPosition(position) {
  x.innerHTML = "Latitude: " + position.coords.latitude +
  "<br>Longitude: " + position.coords.longitude;
}
</script>
	<!--API KEY - AIzaSyAsWlHyDBNk6Yk7GqwpwBMZIDZN4LagdIM -->


	
		<div id="MolMap" margin-top="30px">
			<p>We are here</p>
			<img src= "<?php echo base_url();?>assets/images/Molineux-inside.jpg" alt="">
		</div>
	
<div id="MolPicandCoords"></div>
	

<table>
 
  <tr>
    <td>Latitude :</td>
    <td>52.5904</td>
   
  </tr>
  <tr>
    <td>Longitude :</td>
    <td>-2.13061</td>
    
  </tr>
  <tr>
    <td>DMS coordinates:</td>
    <td>52°35'25.44" N 2°7'50.196" W</td>
    
  </tr>
  <tr>
    <td>OS Grid Coordinates:</td>
    <td>SO912991</td>
    
  </tr>
  <tr>
    <td>UTM coordinates (WGS84):</td>
    <td>Zone 30U E: 558895.15 N: 5827062.42</td>
  </tr>
</table>



</div>
</div>



