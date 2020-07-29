<div class="jumbotron text-center">
<div class="container-fluid" id="content_about">
	<h2>About</h2>

</div>


<!--Google Maps as an added feature, put a picture of Molineux and put an arrow pointing to its location-->
<div container-fluid>
	<a>
	<div id="map" style="width:400px;height:400px;background:yellow"></div>

	<script>
		function myMap() {
		var mapOptions = {
		    center: new google.maps.LatLng(51.5, -0.12),
		    zoom: 10,
		    mapTypeId: google.maps.MapTypeId.HYBRID
		}
		var map = new google.maps.Map(document.getElementById("map"), mapOptions);
		}
	</script>

	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBu-916DdpKAjTmJNIgngS6HL_kDIKU0aU&callback=myMap"></script>

	<div id="geolocation">
	<!--Geolocation script - use this for Mobile with auto device detection and responsive layout with Bootstrap-->

	<a href="#" id="find_location">Geolcation</a>
	<div id="geomap">
		<iframe src="geo_google_map" style="height:300px;width:400px"></iframe>
	</div>
		<script>
			var l = function(position) {
			var	lat = position.coords.latitude,
				long = position.coords.logitude,
				coords = lat + ',' + long;

				document.getElementById('geo_google_map').setAttribute('src', 'https://maps.google.co.uk/q=' + coords + '& 'z=50&output=embed
					);
			}

			document.getElementById('find_location').onclick = function() {
				navigator.geolocation.getCurrentPosition(l);
				return false;
			}

		</script>


	<p>Click the button to get your coordinates.</p>

	<button onclick="getLocation()">Locate</button>

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

		function showPosition(position) {
  var latlon = position.coords.latitude + "," + position.coords.longitude;

  var img_url = "https://maps.googleapis.com/maps/api/staticmap?center=
  "+latlon+"&zoom=14&size=400x300&sensor=false&key=AIzaSyAsWlHyDBNk6Yk7GqwpwBMZIDZN4LagdIM";

  document.getElementById("mapholder").innerHTML = "<img src='"+img_url+"'>";
}


	</script>

	<!--API KEY - AIzaSyAsWlHyDBNk6Yk7GqwpwBMZIDZN4LagdIM -->

</div>

</div>
</div>



