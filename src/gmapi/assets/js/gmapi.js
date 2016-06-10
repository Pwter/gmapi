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

    var markerId = 0;
    while ($('#googleMap').data('marker-'+markerId) != 'undefined') {
        var markerLat = $('#googleMap').data('marker-'+markerId).split(';')[0];
        var markerLng = $('#googleMap').data('marker-'+markerId).split(';')[1];
        var myCenter = new google.maps.LatLng(markerLat,markerLng);
        var marker = new google.maps.Marker({
            position:myCenter,
        });
        marker.setMap(map);
        markerId++;
    }

    var marker=new google.maps.Marker({
            position:myCenter,
          });

        marker.setMap(map);

}

google.maps.event.addDomListener(window, 'load', initialize);
