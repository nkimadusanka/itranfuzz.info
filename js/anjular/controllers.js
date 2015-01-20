/**
 * this contain all details about angular js controllers
 */

/*main screen controllers*/

main_app.controller('mainController',['$scope','$rootScope',
       function($scope,$rootScope){
		try {
			$rootScope.initialize();
			$rootScope.mapClick();
			clusterFormValid();
		} catch (e) {
			window.alert("This is catch exception");
		}
}]);

/*End of main screen controllers*/

/* Cluster control methods */
main_app.controller('clusterController', [ '$scope', '$rootScope',
		function($scope, $rootScope) {
			try {
				$rootScope.initialize();
				$rootScope.mapClick();
				clusterFormValid();
			} catch (e) {
				window.alert("This is catch exception");
			}
		} ]);
main_app.controller('cluter_table', [
		'$scope',
		'$http',
		'$rootScope',
		function($scope, $http, $rootScope) {
			$http.get("center_controller/getallcenters").success(
					function(response) {
						$scope.centers = response;
					});

			/* Remove scope fucntion */
			$scope.removecenter = function(cId) {
				for (var i = 0; i < $scope.centers.length; i++)
					if ($scope.centers[i]["cId"] == cId)
						break;
				var mesg = $scope.centers[i]["address1"] + " "
						+ $scope.centers[i]["address2"] + " "
						+ $scope.centers[i]["province"]
						+ " do you want to delete?";
				if (window.confirm(mesg)) {
					var data = $.param({
						json : JSON.stringify({
							cId : $scope.centers[i]["cId"]
						})
					});
					$http.post('center_controller/removecenter', {
						cId : $scope.centers[i]["cId"]
					}).success(function(respone) {
						if (respone.STATUS = 1) {
							window.alert("add successfuly");
						}
					});
				}
				$http.get("center_controller/getallcenters").success(
					function(response) {
						$scope.centers = response;
				});
			};
			/* View scope function */
			$scope.viewcenter = function(cId) {
				for (var i = 0; i < $scope.centers.length; i++)
					if ($scope.centers[i]["cId"] == cId)
						break;
				$scope.province = $scope.centers[i]["province"];
				$scope.address1 = $scope.centers[i]["address1"];
				$scope.address2 = $scope.centers[i]["address2"];
				$scope.phone = $scope.centers[i]["phone"];
				$scope.type = $scope.centers[i]["type"];

				try {
					$rootScope.initialize();
					$rootScope.marker.setMap(null);
					$rootScope.marker = new google.maps.Marker({
						position : {
							lat : parseFloat($scope.centers[i]["lLatitude"]),
							lng : parseFloat($scope.centers[i]["lLongitude"])
						},
						map : $rootScope.map
					});
				} catch (e) {
					sMessage("Error", "Error in google map");
				}
				$('.clustview-msg-model').modal('toggle');
			}
			$scope.updatecenter = function(cId) {

				$('.clustupdate-msg-model').modal('toggle');

				for (var i = 0; i < $scope.centers.length; i++)
					if ($scope.centers[i]["cId"] == cId)
						break;
				$scope.cId = $scope.centers[i]["cId"];
				$scope.province = $scope.centers[i]["province"];
				$scope.address1 = $scope.centers[i]["address1"];
				$scope.address2 = $scope.centers[i]["address2"];
				$scope.phone = $scope.centers[i]["phone"];
				$scope.type = $scope.centers[i]["type"];

				clusterFormUpdateValid();

				try {
					$rootScope.initialize(1);
					$rootScope.marker.setMap(null);
					$rootScope.marker = new google.maps.Marker({
						position : {
							lat : parseFloat($scope.centers[i]["lLatitude"]),
							lng : parseFloat($scope.centers[i]["lLongitude"])
						},
						map : $rootScope.map
					});
				} catch (e) {
					sMessage("Error", "Error in google map");
				}
			}
		} ]);

/* End of Cluster control methods */
/* Start of Staff Control methods */
main_app.controller('staffController', [ '$scope', '$rootScope',
		function($scope, $rootScope) {
			staffFormValid();
		} ]);
main_app.controller('staff_table', [
		'$scope',
		'$rootScope',
		'$http',
		function($scope, $rootScope, $http) {
			$http.get("employee_controller/getallemployees").success(
					function(response) {
						$scope.employees = response;
					});
			/* View Staff */
			$scope.viewstaff = (function(eId) {
				for (var i = 0; i < $scope.employees.length; i++)
					if ($scope.employees[i]["eId"] == eId)
						break;
				$scope.fname = $scope.employees[i]["fname"];
				$scope.lname = $scope.employees[i]["lname"];
				$scope.address1 = $scope.employees[i]["address1"];
				$scope.address2 = $scope.employees[i]["address2"];
				$scope.gender = $scope.employees[i]["gender"];
				$scope.phone = $scope.employees[i]["phone"];
				$scope.type = $scope.employees[i]["type"];
				$('.sfaffview-msg-model').modal('toggle');
			});
			$scope.updatestaff =( function(eId) {
				
				for (var i = 0; i < $scope.employees.length; i++)
					if ($scope.employees[i]["eId"] == eId)
						break;
				$scope.email = $scope.employees[i]["email"];
				$scope.fname = $scope.employees[i]["fname"];
				$scope.lname = $scope.employees[i]["lname"];
				$scope.address1 = $scope.employees[i]["address1"];
				$scope.address2 = $scope.employees[i]["address2"];
				$scope.gender = $scope.employees[i]["gender"];
				$scope.phone = $scope.employees[i]["phone"];
				$scope.type = $scope.employees[i]["type"];
				
				$('.staffupdate-msg-model').modal('toggle');
				
			});
		} ]);
/* End of Staff Control methods */

/* Start of donor manipulation controllers */

//donor registration controller
main_app.controller('donorControl',['$scope','$rootScope',
	function($scope,$rootScope){
		try {
				$rootScope.initialize();
				$rootScope.mapClick();
				donorRegValid();
			} catch (e) {
				window.alert("This is catch exception");
			}
}]);

//donor table manipulation controller
main_app.controller('donor_table', [
		'$scope',
		'$http',
		'$rootScope',
		function($scope, $http, $rootScope) {
			$http.get("donor_controller/getAllDonors").success(
					function(response) {
						$scope.donors = response;
					});

			/* Remove scope fucntion */
			$scope.removedonor = function(dId) {
				for (var i = 0; i < $scope.donors.length; i++)
					if ($scope.donors[i]["dId"] == dId)
						break;
				var mesg = $scope.donors[i]["fname"] + " "
						+ $scope.donors[i]["lname"] + " "
						+ $scope.donors[i]["bType"]
						+ " do you want to delete?";
				if (window.confirm(mesg)) {
					var data = $.param({
						json : JSON.stringify({
							dId : $scope.donors[i]["dId"]
						})
					});
					$http.post('donor_controller/remove_donor', {
						dId : $scope.donors[i]["dId"]
					}).success(function(respone) {
						if (respone.STATUS = 1) {
							window.alert("remove successfuly");
							$http.get("donor_controller/getAllDonors").success(
							function(response) {
								$scope.donors = response;
							});
						}
					});
				}
			};
			/* View scope function */
			$scope.viewdonor = function(dId) {
				for (var i = 0; i < $scope.donors.length; i++)
					if ($scope.donors[i]["dId"] == dId)
						break;
				$scope.email = $scope.donors[i]["email"];
				$scope.nic = $scope.donors[i]["nic"];
				$scope.fname = $scope.donors[i]["fname"];
				$scope.lname = $scope.donors[i]["lname"];
				$scope.gender = $scope.donors[i]["gender"];
				$scope.dob = $scope.donors[i]["dob"];
				$scope.bType = $scope.donors[i]["bType"];

				try {
					$rootScope.initialize();
					$rootScope.marker.setMap(null);
					$rootScope.marker = new google.maps.Marker({
						position : {
							lat : parseFloat($scope.donors[i]["lLatitude"]),
							lng : parseFloat($scope.donors[i]["lLongitude"])
						},
						map : $rootScope.map
					});
				} catch (e) {
					sMessage("Error", "Error in google map");
				}
				$('.donorview-msg-model').modal('toggle');
			}
			/*]$scope.updatecenter = function(cId) {

				$('.clustupdate-msg-model').modal('toggle');

				for (var i = 0; i < $scope.centers.length; i++)
					if ($scope.centers[i]["cId"] == cId)
						break;

				$scope.province = $scope.centers[i]["province"];
				$scope.address1 = $scope.centers[i]["address1"];
				$scope.address2 = $scope.centers[i]["address2"];
				$scope.phone = $scope.centers[i]["phone"];
				$scope.type = $scope.centers[i]["type"];

				try {
					$rootScope.initialize(1);
					clusterFormValid();
					$rootScope.marker.setMap(null);
					$rootScope.marker = new google.maps.Marker({
						position : {
							lat : parseFloat($scope.centers[i]["lLatitude"]),
							lng : parseFloat($scope.centers[i]["lLongitude"])
						},
						map : $rootScope.map
					});
				} catch (e) {
					sMessage("Error", "Error in google map");
				}
			}*/
		} ]);
//end of donor manipulation controllers

// add event controller
main_app.controller('addEventController',[
	'$scope',
	'$http',
	'$rootScope',
	function($scope,$http,$rootScope){
		try {
				$rootScope.initialize();
				$rootScope.mapClick();
				eventAddValidator();
			} catch (e) {
				window.alert("This is catch exception");
			}
	}
]);
// end of add event controller
//add blood request controller
main_app.controller('addBloodRequest',['$scope','$rootScope',
	function($scope,$rootScope){
		try{
			addBloodRequestValidator();	
		}catch(e){
			window.alert("This is a exception");
		}
		
	}
]);
//end of blood request
//add blood donation methods
main_app.controller('addBloodMethod',['$scope','$rootScope',
	function($scope,$rootScope){
		try{
			addBloodMethodValidator();
		}catch(e){
			window.alert("This is a exception");
		}
	}
]);
//end of blood donation methods

//add particiaption controller
main_app.controller('magPartation',['$http','$scope','$rootScope',
	function($http,$scope,$rootScope){

		try{

			$rootScope.updatePart = function(){
				$.post('part_controller/getParticipationList', { 'event_evId' : $rootScope.event_evId }, 
					function(respone){
						$scope.parts = respone;
					}
				);
				/*$http.post('part_controller/getParticipationList',{ 'event_evId' : $rootScope.event_evId }).success(function(respone){
					$scope.parts = respone;
				});*/
			};

			//adding vlidation
			addParticipageValid();

			$scope.selectEvent = function(){
				var ssevent = $('#selectEvent').val();
				for (var i = 0; i < $scope.events.length; i++){
					if ($scope.events[i]["mseId"] == ssevent){
						$rootScope.event_evId = ssevent;
						document.getElementById('orgName').innerHTML = $scope.events[i]["orgName"];
						document.getElementById('address1').innerHTML = $scope.events[i]["address1"];
						document.getElementById('address2').innerHTML = $scope.events[i]["address2"];
						document.getElementById('date').innerHTML = $scope.events[i]["date"];
						document.getElementById('stime').innerHTML = $scope.events[i]["stime"];
						break;
					}
				}
				$rootScope.updatePart();
			};
			$scope.addPart = function(){
				$('.addpart-msg-model').modal('toggle');		
			};

			$scope.partDelete = function(adonor_dId,aevent_evId){
				$http.post('part_controller/deletePart', {
						donor_dId : adonor_dId,
						event_evId :aevent_evId
				}).success(function(respone) {
					if (respone.STATUS = true) {
						window.alert("Delete successfully");
					}else{
						window.alert("Delete fail");
					}
					$rootScope.updatePart();
				});
			};

			$http.post('part_controller/gettodayeventsbycid').success(function(respone) {
				$scope.events = respone;
				$('.eventselect-msg-model').modal('toggle');
			});

			$http.post('part_controller/getdonationmethods').success(function(respone) {
				$scope.methods = respone;
			});

		}catch(e){
			window.alert("This is a exception");
		}
	}
]);
//end of end particiaption controller


//view particiaption controller
main_app.controller('viewPartation',['$http','$scope','$rootScope',
	function($http,$scope,$rootScope){

		try{

			$rootScope.updatePart = function(){
				$.post('part_controller/getParticipationList', { 'event_evId' : $rootScope.event_evId }, 
					function(respone){
						$scope.parts = respone;
					}
				);
				/*$http.post('part_controller/getParticipationList',{ 'event_evId' : $rootScope.event_evId }).success(function(respone){
					$scope.parts = respone;
				});*/
			};


			$scope.selectEvent = function(){
				$rootScope.event_evId = $('#selectEvent').val();
				var  ssevent = $rootScope.event_evId
				for (var i = 0; i < $scope.events.length; i++){
					if ($scope.events[i]["mseId"] == ssevent){
						document.getElementById('orgName').innerHTML = $scope.events[i]["orgName"];
						document.getElementById('address1').innerHTML = $scope.events[i]["address1"];
						document.getElementById('address2').innerHTML = $scope.events[i]["address2"];
						document.getElementById('date').innerHTML = $scope.events[i]["date"];
						document.getElementById('stime').innerHTML = $scope.events[i]["stime"];
						break;
					}
				}
				$rootScope.updatePart();
			};
			
			$http.post('part_controller/getPreviousEvents').success(function(respone) {
				$scope.events = respone;
				$('.eventselect-msg-model').modal('toggle');
			});

		}catch(e){
			window.alert("This is a exception");
		}
	}
]);
//end of view particiaption controller



//view donor history details

main_app.controller('donor_hist',['$scope','$rootScope','$http',
	function($scope,$rootScope,$http){
		$http.post('donor_controller/gethistory',{ 'event_evId' : $rootScope.event_evId }).success(function(respone){
					$scope.parts = respone;
		});
	}
]);

//end of donor histry view

