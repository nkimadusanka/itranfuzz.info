var main_app = angular.module('app',['ngRoute']).run(function($rootScope){
	
	/*anjs global variables of map*/
	try{
		$rootScope.map;
		$rootScope.marker = new google.maps.Marker(null);
	}catch(e){
		sMessage("Warning","Internet Connection is Lost");
	}
	
	
	/*initializing google map function*/
	$rootScope.initialize = function(mId){
		
		if(typeof(mId)==='undefined') mId = 0;
		var mapOptions = {
		        center: new google.maps.LatLng(6.971445,79.922209),
		            zoom: 10
		 };
		
		$rootScope.map = new google.maps.Map($("div[id^=map-canvas]")[mId],mapOptions);
		
		google.maps.event.addListenerOnce($rootScope.map, 'idle', function() {
			   google.maps.event.trigger($rootScope.map, 'resize');
			   $rootScope.map.setCenter($rootScope.marker.getPosition());
		});
	}
	$rootScope.mapClick = function(){
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
      when('/add_cluster', {
        templateUrl: 'anjscontroller/addcluster_tile',
      }).
      when('/view_cluster', {
          templateUrl: 'anjscontroller/viewcluster_tile',
      }).
      when('/add_staff', {
          templateUrl: 'anjscontroller/addstaff_tile',
      }).
      when('/view_staff', {
          templateUrl: 'anjscontroller/viewstaff_tile',
      }).
      when('/view_staff', {
          templateUrl: 'anjscontroller/viewstaff_tile',
      }).
      when('/add_donor', {
          templateUrl: 'anjscontroller/adddonor_tile',
      }).
      when('/view_donor', {
          templateUrl: 'anjscontroller/viewdonor_tile',
      }).
      when('/blood_request', {
          templateUrl: 'anjscontroller/addbloodrequest',
      }).
      when('/method_registration', {
          templateUrl: 'anjscontroller/method_registration',
      }).
      when('/add_event', {
          templateUrl: 'anjscontroller/addevent',
      }).
      when('/mang_part', {
          templateUrl: 'anjscontroller/mangpart',
      }).
      when('/view_part', {
          templateUrl: 'anjscontroller/viewpart',
      }).
      when('/view_hist', {
          templateUrl: 'anjscontroller/viewhist',
      }).
      otherwise({
        redirectTo: 'anjscontroller'
      });
  }]);

/**this is large message displaying function**/
function lMessage(title,message){
	$("#lTitle").text(title);
	$("#lContent").text(message);
	$('.larg-msg-model').modal('toggle');
}
/**this is small message displaying function**/
function sMessage(title,message){
	$("#sTitle").text(title);
	$("#sContent").text(message);
	$('.small-msg-model').modal('toggle');
}
