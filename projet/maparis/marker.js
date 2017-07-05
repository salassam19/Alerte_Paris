//pour marquer les points d'intérêt.
function marker() {
	var markerOptions = {
	    position: new google.maps.LatLng(48.866,-2.333)
	};
	var marker = new google.maps.Marker(markerOptions);
	marker.setMap(map);
}
	