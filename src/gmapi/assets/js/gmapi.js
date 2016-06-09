function initialize() {
    var lat = $('#googleMap').data('lat');
    var lng = $('#googleMap').data('lng');
    var zoom = $('#googleMap').data('zoom');
    var mapType = $('#googleMap').data('map-type');

    var mapProp = {
        center:new google.maps.LatLng(lat,lng),
        zoom:zoom,
        mapTypeId:google.maps.MapTypeId[mapType]
    };

    var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);

    var m = $('#googleMap').data('markers');

    var myCenter = new google.maps.LatLng(lat,lng);
    var marker=new google.maps.Marker({
        position:myCenter,
      });

    marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
