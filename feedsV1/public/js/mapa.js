//google.maps.event.addDomListener(window, 'load', function(){
    $( document ).ready(function() {
    console.log("Ready");
    var map;
    var lat = $('#lat').val();
    var lng = $('#lng').val();
    function initMap() {

      if (lat === "" && lng === "") {
        if (navigator.geolocation) {
          // intentamos obtener la ubucación del usuario
          // con las funciones getCoords y getError
          navigator.geolocation.getCurrentPosition(getCoords, getError);
        } else {
            // si falla lo mandarmos esta ubucación predeterminada (Campeche)
            initialize( 19.8452918, -90.5368304);
        }

      } else {
        initialize(lat, lng);
      }

      function getCoords(position) {
        // funcion que obtiene la posicion del usuario
        var lat = position.coords.latitude;
        var lng = position.coords.longitude;
        initialize(lat, lng);
      }

      function getError(err) {
          // funcion de error e inicializamos en Campeche
          console.log(err.message);
          initialize( 19.8452918, -90.5368304, 13);
      }

      function initialize(lat, lng, config_zoom=18) {
        // recibe los parametros localizados o no y crea un mapa
        var latlng = new google.maps.LatLng(lat, lng);
        var mapSettings ={
            center: latlng,
            zoom: config_zoom,
            mapTypeId: 'roadmap'
        }
        var map = new google.maps.Map($('#map').get(0), mapSettings);

        var img = '/img/icon-rest2.png';
        var marker = new google.maps.Marker({
            position: latlng,
            map: map,
            draggable: true,
            icon: img,
            title: "Arrastrame!",
            animation: google.maps.Animation.DROP,
        });

        var contentid = "Guardar la ubicación actual, " +"<br>" +
            "o arrastre el marcador para mayor precisión" + "<br>"
        var information =  new google.maps.InfoWindow({
            content: contentid
        })

        marker.addListener('click', function() {
            information.open(map, marker);
        })
        information.open(map,marker);
        // agrega a los inputs la ubucacion actual
        $('#lat').val((lat));
        $('#lng').val((lng));
        marker.addListener('dragend', function(){
            // evento al arrastrar el marcador
            getMarkerCoords(marker);
        });
        // usa el autocompletado de google maps obteniendo el valor del input
        //autocomplete = new google.maps.places.Autocomplete((document.getElementById('autocomplete')))
        //autocomplete.bindTo('bounds', map);
        /* 
        autocomplete.addListener('place_changed', function() {
          // ocultar el marcador
          marker.setVisible(false)
          var place = autocomplete.getPlace()

          if (!place.geometry.viewport) {
              alert("No se puede encontrar el lugar");
              return;
          }
          if (place.geometry.viewport){
              map.fitBounds(place.geometry.viewport);
          } else {
              map.setCenter(place.geometry.location);
              map.setZoom(18);
          }
          marker.setPosition(place.geometry.location);
          marker.setVisible(true);
          $('#lat').val(place.geometry.location.lat());
          $('#lng').val(place.geometry.location.lng());
      }) */
      }

      function getMarkerCoords(marker){
          // obtiene las coordenadas actuales del marcador
          // y las envia a los inputs lat y lng
          var markerCoords = marker.getPosition();
          $('#lat').val(markerCoords.lat());
          $('#lng').val(markerCoords.lng());
      }

    }
    // Inicio
    initMap()
});

