$(document).ready(function(){
  var geocoder = new google.maps.Geocoder();
  var latLng = new google.maps.LatLng(-17.783261784915865, -63.18217782929685);
  var map = new google.maps.Map(document.getElementById('map'), {
    zoom: 12,
    center: latLng,
    mapTypeId: google.maps.MapTypeId.ROADMAP
  });
  var marker = new google.maps.Marker({
    position: latLng,
    title: 'Point A',
    map: map,
    draggable: true
  });


    /*var infoWindow = new google.maps.InfoWindow({map: map});

    // Try HTML5 geolocation.
    if (navigator.geolocation) {
        navigator.geolocation.getCurrentPosition(function(position) {
            var pos = {
                lat: position.coords.latitude,
                lng: position.coords.longitude
            };
            latLng  = {
                lat: pos.lat,
                lng: pos.lng
            };
            infoWindow.setPosition(pos);
            infoWindow.setContent('Localizacion encontrada.');
            map.setCenter(pos);
            marker.setPosition(pos);
        }, function() {
            handleLocationError(true, infoWindow, map.getCenter());
        });
    } else {
        // Browser doesn't support Geolocation
        handleLocationError(false, infoWindow, map.getCenter());
    }*/


  // Update current position info.
  updateMarkerPosition(latLng);
  geocodePosition(latLng);


  // Add dragging event listeners.
  //este es para la direccion
  google.maps.event.addListener(marker, 'dragstart', function() {
    updateMarkerAddress('Calculando...');
  });

  //este para las coordenadas
  google.maps.event.addListener(marker, 'drag', function() {
    updateMarkerStatus('En movimiento...');
    updateMarkerPosition(marker.getPosition());
  });

  //este es al detener el marcador
  google.maps.event.addListener(marker, 'dragend', function() {
    updateMarkerStatus('Detenido');
    geocodePosition(marker.getPosition());
  });
  google.maps.event.addDomListener(window, 'load', initialize);

function geocodePosition(pos) {
  geocoder.geocode({
    latLng: pos
  }, function(responses) {
    if (responses && responses.length > 0) {
      updateMarkerAddress(responses[0].formatted_address);
    } else {
      updateMarkerAddress('No se puede determinar la dirección.');
    }
  });
}

function updateMarkerStatus(str) {
  //document.getElementById('markerStatus').innerHTML = str;
}

function updateMarkerPosition(latLng) {
  /*document.getElementById('info').innerHTML = [
    latLng.lat(),
    latLng.lng()
  ].join(', ');*/
  document.getElementById('longitud').value = latLng.lng();
  document.getElementById('latitud').value = latLng.lat();

}

function updateMarkerAddress(str) {
  document.getElementById('address').innerHTML = str;
}
//funcion de geolocalización
/*function handleLocationError(browserHasGeolocation, infoWindow, pos) {
  infoWindow.setPosition(pos);
  infoWindow.setContent(browserHasGeolocation ?
                        'Error: La geolocalización fallo.' :
                        'Error: Tu navegador no soporta la geolocalización.');}*/

});
