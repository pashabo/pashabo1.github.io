// When the window has finished loading create our google map below
google.maps.event.addDomListener(window, 'load', init);

function init() {
	// Basic options for a simple Google Map
	// For more options see: https://developers.google.com/maps/documentation/javascript/reference#MapOptions
	var mapOptions = {
		// How zoomed in you want the map to start at (always required)
		zoom: 14,
		zoomControl: false,
		scrollwheel: false,
		streetViewControl: false,
		mapTypeControl: false,

		// The latitude and longitude to center the map (always required)
		center: new google.maps.LatLng(59.921704, 30.416244), //New York

		// How you would like to style the map.
		// This is where you would paste any style found on Snazzy Maps.
		styles: [{"featureType":"landscape.man_made","elementType":"geometry.fill","stylers":[{"lightness":"27"}]},{"featureType":"landscape.natural.terrain","elementType":"all","stylers":[{"visibility":"off"}]},{"featureType":"road.highway","elementType":"geometry.fill","stylers":[{"lightness":"23"}]},{"featureType":"road.highway","elementType":"geometry.stroke","stylers":[{"lightness":"25"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.fill","stylers":[{"saturation":"0"},{"lightness":"25"}]},{"featureType":"road.highway.controlled_access","elementType":"geometry.stroke","stylers":[{"lightness":"50"}]},{"featureType":"road.highway.controlled_access","elementType":"labels","stylers":[{"lightness":"32"}]},{"featureType":"road.arterial","elementType":"geometry.fill","stylers":[{"lightness":"66"}]},{"featureType":"road.arterial","elementType":"geometry.stroke","stylers":[{"lightness":"70"}]},{"featureType":"road.local","elementType":"geometry.stroke","stylers":[{"visibility":"off"}]},{"featureType":"road.local","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"transit.line","elementType":"labels.icon","stylers":[{"saturation":"-100"}]},{"featureType":"transit.station","elementType":"labels.icon","stylers":[{"saturation":"-100"}]}]
	};

	// Get the HTML DOM element that will contain your map
	// We are using a div with id="map" seen below in the <body>
	var mapElement = document.getElementById('map');

	// Create the Google Map using our element and options defined above
	var map = new google.maps.Map(mapElement, mapOptions);

	// Let's also add a marker while we're at it
	var marker = new google.maps.Marker({
		position: new google.maps.LatLng(59.921704, 30.416244),
		map: map,
		title: 'Южный ветер',
		icon: 'img/map-pin-spb.png'
	});


	map.addListener('click', function() {
		map.setOptions({
			scrollwheel: true
		});
	});

	map.addListener('drag', function() {
		map.setOptions({
			scrollwheel: true
		});
	});

	map.addListener('mouseout', function() {
		map.setOptions({
			scrollwheel: false
		});
	});



}
