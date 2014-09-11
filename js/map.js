/*global variables of map*/
var map;
var marker = new google.maps.Marker(null);
var clickedMarkerselect = false;


$(document).ready(function(){
/*initializing map div*/
function initialize() {
    var mapOptions = {
        center: new google.maps.LatLng(6.971445,79.922209),
            zoom: 15
    };
    map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
    google.maps.event.addListener(map,'click',function(e){
    	placeMarker(e.latLng, map);
    });
    function placeMarker(position, map){
    	marker.setMap(null);
    	clickedMarkerselect = true;
    	marker = new google.maps.Marker({
    		position: position,
    		map: map
    	});
    	map.panTo(position);
    }
}
google.maps.event.addDomListener(window, 'load', initialize);
});