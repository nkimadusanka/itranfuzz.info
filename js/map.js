$(document).ready(function(){

/*initializing map div*/
function initialize() {
            var mapOptions = {
              center: new google.maps.LatLng(6.971445,79.922209),
              zoom: 15
            };
            var map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
}

google.maps.event.addDomListener(window, 'load', initialize);

});