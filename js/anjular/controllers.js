/**
 * this contain all details about angular js controllers
 */

main_app.controller('mapController',['$scope','$rootScope',function($scope,$rootScope){
	
	$scope.marker = new google.maps.Marker(null);
	
	$scope.initialize =function(){
		var mapOptions = {
		        center: new google.maps.LatLng(6.971445,79.922209),
		            zoom: 15
		    };
		
		map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
		google.maps.event.addListener(map,'click',function(e){			
			placeMarker(e.latLng, map);
		 });
		
		placeMarker = function(position, map){
			    $scope.marker.setMap(null);
				clickedMarkerselect = true;
				$scope.marker = new google.maps.Marker({
		    		position: position,
		    		map: map
		    	});
		    	map.panTo(position);
		};
	}
}]);
