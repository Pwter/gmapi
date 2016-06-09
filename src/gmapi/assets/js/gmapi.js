function initialize() {
    var lat = $('#googleMap').data('lat');
    var lng = $('#googleMap').data('lng');
    var mapProp = {
        center:new google.maps.LatLng(lat,lng),
        zoom:5,
        mapTypeId:google.maps.MapTypeId.ROADMAP
    };
      var map=new google.maps.Map(document.getElementById("googleMap"),mapProp);
}

google.maps.event.addDomListener(window, 'load', initialize);
