var main_app = angular.module('app',['ngRoute']).run(function($rootScope){
	
	/*anjs global variables of map*/
	try{
		$rootScope.map;
		$rootScope.marker = new google.maps.Marker(null);
	}catch(e){
		window.alert("No internet connection");
	}
	
	
	/*initializing google map function*/
	$rootScope.initialize = function(){
		var mapOptions = {
		        center: new google.maps.LatLng(6.971445,79.922209),
		            zoom: 15
		 };
		
		$rootScope.map = new google.maps.Map(document.getElementById("map-canvas"),mapOptions);
		google.maps.event.addListener($rootScope.map,'click',function(e){			
			placeMarker(e.latLng, $rootScope.map);
		 });
		
		placeMarker = function(position, map){
				$rootScope.marker.setMap(null);
				$rootScope.marker = new google.maps.Marker({
		    		position: position,
		    		map: map
		    	});
		    	map.panTo(position);
		};
	}
	
});

main_app.config(['$routeProvider',
  function($routeProvider) {
    $routeProvider.
      when('/', {
        templateUrl: 'anjscontroller',
      }).
      when('/donor_tile', {
        templateUrl: 'anjscontroller/donor_tile',
      }).
      when('/add_cluster', {
        templateUrl: 'anjscontroller/addcluster_tile',
      }).
      when('/update_cluster', {
          templateUrl: 'anjscontroller/updatecluster_tile',
      }).
      when('/remove_cluster', {
          templateUrl: 'anjscontroller/removecluster_tile',
      }).
      when('/add_staff', {
          templateUrl: 'anjscontroller/addstaff_tile',
      }).
      when('/update_staff', {
          templateUrl: 'anjscontroller/updatestaff_tile',
      }).
      when('/remove_staff', {
          templateUrl: 'anjscontroller/removestaff_tile',
      }).
      when('/view_staff', {
          templateUrl: 'anjscontroller/viewstaff_tile',
      }).
      otherwise({
        redirectTo: 'anjscontroller'
      });
  }]);

