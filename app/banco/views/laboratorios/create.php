<style type="text/css">
.input-controls {
margin-top: 10px;
border: 1px solid transparent;
border-radius: 2px 0 0 2px;
box-sizing: border-box;
-moz-box-sizing: border-box;
height: 32px;
outline: none;
box-shadow: 0 2px 6px rgba(0, 0, 0, 0.3);
}
#searchInput {
background-color: #fff;
font-family: Roboto;
font-size: 15px;
font-weight: 300;
margin-left: 12px;
padding: 0 11px 0 13px;
text-overflow: ellipsis;
width: 50%;
}
#searchInput:focus {
border-color: #4d90fe;
}
</style>
<div id="panel" class="panel panel-primary">
  <div class="panel-heading">
    <h3 class="panel-title text-muted"><i class="fa fa-eyedropper fa-2x"></i><i class="fa fa-plus"></i> LABORATORIO</h3>
  </div>
  <br>
  <div class="panel-body">
    <form action="<?php echo baseUrl ?>banco/laboratorios" method="POST">
      <?php echo Token::field() ?>
      <div class="row">
        <div class="col-lg-12 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="razon_social" placeholder="Razon Social" required>
          </div>
        </div>
<!--         <div class="col-lg-12 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="direccion" placeholder="Dirección" required>
          </div>
        </div> -->
        <div class="col-lg-6 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="email" name="email" placeholder="Email" required>
          </div>
        </div>
        <div class="col-lg-6 animated fadeIn">
          <div class="form-group">
            <input class="form-control" type="text" name="telefono" placeholder="Telefono" required>
          </div>
        </div>
      </div>
      <hr>
      <div class="row">
        <div class="col-lg-12 animated fadeIn subidaImagen">
          <div class="col-md-2">
            <div class="form-group">
              <script src="//api.filestackapi.com/filestack.js" type="text/javascript"></script>
              <input class="btn btn-primary" name="imagen" onchange="cambiarImagen(event.fpfile.url)" data-fp-services="COMPUTER,URL,WEBCAM" data-fp-button-text="Ingresar Imagen" data-fp-maxsize="1000000" data-fp-container="modal" data-fp-mimetypes="image/*" data-fp-apikey="A1nL8omiAR8W7pHi3cotzz" type="filepicker">
            </div>
          </div>
          <div id="imagenSubidaDiv" class="col-md-10">
            <img id="imagenSubida" src="" alt="">
          </div>
        </div>
      </div>
      <div class="row">
        <div class="col-md-12 panel panel-default">
          <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBJAW7MQOeI2ZgWp58Zdphfa9F7AQy3YRI&sensor=false&libraries=places"></script>
          <input id="searchInput" class="input-controls" type="text" placeholder="Ingrese ubicación de  laboratorio">
          <div class="map" id="map" style="width: 100%; height: 300px;"></div>
          <div class="form_area">
            <input type="text" name="location" id="location">
            <input type="hidden" name="lat" id="lat">
            <input type="hidden" name="lng" id="lng">
          </div>
        </div>
      </div>
      <script>
      /* script */
      function initialize() {
      var latlng = new google.maps.LatLng(28.5355161,77.39102649999995);
      var map = new google.maps.Map(document.getElementById('map'), {
      center: latlng,
      zoom: 13,
      zoomControl: false,
      scaleControl: true,
      mapTypeControl: false,
      fullscreenControl: true,
      });
      var marker = new google.maps.Marker({
      map: map,
      position: latlng,
      draggable: true,
      anchorPoint: new google.maps.Point(0, -29)
      });
      var myMarker = new google.maps.Marker({
      position: new google.maps.LatLng(47.651968, 9.478485),
      draggable: true
      });
      var input = document.getElementById('searchInput');
      map.controls[google.maps.ControlPosition.TOP_LEFT].push(input);
      var geocoder = new google.maps.Geocoder();
      var autocomplete = new google.maps.places.Autocomplete(input);
      autocomplete.bindTo('bounds', map);
      var infowindow = new google.maps.InfoWindow();
      autocomplete.addListener('place_changed', function() {
      infowindow.close();
      marker.setVisible(false);
      var place = autocomplete.getPlace();
      if (!place.geometry) {
      window.alert("Autocomplete's returned place contains no geometry");
      return;
      }
      
      // If the place has a geometry, then present it on a map.
      if (place.geometry.viewport) {
      map.fitBounds(place.geometry.viewport);
      } else {
      map.setCenter(place.geometry.location);
      map.setZoom(17);
      }
      
      marker.setPosition(place.geometry.location);
      marker.setVisible(true);
      
      bindDataToForm(place.formatted_address,place.geometry.location.lat(),place.geometry.location.lng());
      infowindow.setContent(place.formatted_address);
      infowindow.open(map, marker);
      
      });
      // this function will work on marker move event into map
      google.maps.event.addListener(marker, 'dragend', function() {
      geocoder.geocode({'latLng': marker.getPosition()}, function(results, status) {
      if (status == google.maps.GeocoderStatus.OK) {
      if (results[0]) {
      bindDataToForm(results[0].formatted_address,marker.getPosition().lat(),marker.getPosition().lng());
      infowindow.setContent(results[0].formatted_address);
      infowindow.open(map, marker);
      }
      }
      });
      });
      }
      function bindDataToForm(address,lat,lng){
      document.getElementById('location').value = address;
      document.getElementById('lat').value = lat;
      document.getElementById('lng').value = lng;
      }
      google.maps.event.addDomListener(window, 'load', initialize);
      function cambiarImagen(data)
      {
      //alert(data);
      $('#imagenSubida').addClass('panel panel-default');
      $('#imagenSubida').attr('src','https://process.filestackapi.com/AhTgLagciQByzXpFGRI0Az/resize=w:250/quality=value:70/compress/'+data);
      $('#imagenSubidaDiv').addClass('animated bounceInDown');
      }
      </script>
      <button type="submit" class="btn btn-lg btn-primary pull-right"><i class="fa fa-save fa-2x"></i></button>
    </form>
  </div>
</div>