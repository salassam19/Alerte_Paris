function initialiser(){
//objet contenant des propriétés avec des identificateurs prédéfinis dans Google Maps permettant
var mapOptions = {
    center: new google.maps.LatLng(48.666, 2.333),
    zoom: 6,
//on define des options d'affichage de notre carte
    mapTypeId: google.maps.MapTypeId.ROADMAP
};
var map = new google.maps.Map(document.getElementById('map'), mapOptions);

//pour marquer les points d'intérêt.
var markerOptions = {
    position: new google.maps.LatLng(48.866, 2.333)
};
var marker = new google.maps.Marker(markerOptions);
marker.setMap(map);

// Un InfoWindow affiche le contenu dans une bulle sur la carte.
var infoWindowOptions = {
    content: 'Paris est ici!'
};

var infoWindow = new google.maps.InfoWindow(infoWindowOptions);
google.maps.event.addListener(marker,'click',function(e){
  
  infoWindow.open(map, marker);
  
});
/*La fonction Autocomplète des emplacements s'attache à un champ de texte sur votre page Web 
et surveille ce champ pour les entrées de caractères. */
var acOptions = {
  types: ['establishment']
};
var autocomplete = new google.maps.places.Autocomplete(document.getElementById('autocomplete'),acOptions);
autocomplete.bindTo('bounds',map);
var infoWindow = new google.maps.InfoWindow();
var marker = new google.maps.Marker({
  map: map
});

google.maps.event.addListener(autocomplete, 'place_changed', function() {
  infoWindow.close();
  var place = autocomplete.getPlace();
  if (place.geometry.viewport) {
    map.fitBounds(place.geometry.viewport);
  } else {
    map.setCenter(place.geometry.location);
    map.setZoom(6);
  }
  marker.setPosition(place.geometry.location);
  infoWindow.setContent('<div><strong>' + place.name + '</strong><br>');
  infoWindow.open(map, marker);
  google.maps.event.addListener(marker,'click',function(e){

    infoWindow.open(map, marker);

  });
});

//Cela montre comment ajouter une couche de temps à votre carte. 

var weatherLayer = new google.maps.weather.WeatherLayer({
  temperatureUnits: google.maps.weather.TemperatureUnit.CELSIUS
});
weatherLayer.setMap(map);

var cloudLayer = new google.maps.weather.CloudLayer();
cloudLayer.setMap(map);




