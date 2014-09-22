/**
 * this contain all details about angular js controllers
 */
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

main_app.controller('staffController', [ '$scope', '$rootScope',
		function($scope, $rootScope) {
			staffFormValid();
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
						+ $scope.centers[i]["address2"]+ " "
						+ $scope.centers[i]["province"]+ " do you want to delete?";
				if(window.confirm(mesg)){
					var data = $.param({
			            json: JSON.stringify({
			                cId: $scope.centers[i]["cId"]
			            })
			        });
					$http.post('center_controller/removecenter',{cId:$scope.centers[i]["cId"]}).success(
						function(respone){
							if(respone.STATUS = 1){
								window.alert("add successfuly");
							}
						}
					);
				}
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
			$scope.updatecenter = function(cId){
				
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
			}
		} ]);