/**
 * this contain all details about angular js controllers
 */
main_app.controller('clusterController', [ '$scope', '$rootScope',
		function($scope, $rootScope) {
			try {
				$rootScope.initialize();
				clusterFormValid();
			} catch (e) {
				window.alert("This is catch exception");
			}
		} ]);

main_app.controller('staffController', [ '$scope', '$rootScope',
		function($scope, $rootScope) {
			staffFormValid();
		} ]);

main_app.controller('cluter_table', [ '$scope', '$http','$rootScope',
		function($scope, $http,$rootScope) {
			$http.get("center_controller/getallcenters").success(function(response) {
				$scope.centers = response;
			});
			$scope.viewcenter = function(cId){
				for (var i=0; i < $scope.centers.length; i++)
				    if ($scope.centers[i]["cId"] == cId)
				    	break;
				$scope.province = $scope.centers[i]["province"];
				$scope.address1 = $scope.centers[i]["address1"];
				$scope.address2 = $scope.centers[i]["address2"];
				$scope.phone = $scope.centers[i]["phone"];
				$scope.type = $scope.centers[i]["type"];
				
				try{
					$rootScope.initialize();
					$rootScope.marker = new google.maps.Marker({
			    		position: {lat: parseFloat($scope.centers[i]["lLatitude"]), lng: parseFloat($scope.centers[i]["lLongitude"])},
			    		map: $rootScope.map
			    	});
					$rootScope.map.panTo(location);
				}catch(e){
					
				}
				
			}
		} ]);

// jquery validators in here
function clusterFormValid() {
	$('#regFormCluster').validate(
			{
				rules : {
					province : {
						required : true
					},
					address1 : {
						required : true
					},
					address1 : {
						required : true
					},
					address2 : {
						required : true
					},
					phone : {
						required : true
					},
					ctype : {
						required : true
					}
				},
				submitHandler : function(form) {
					var rootScope = angular.element('#wrapper').scope();
					if (rootScope.marker.getMap() != null) {
						$('<input />').attr('type', 'hidden').attr('name',
								"lat").attr('value',
								rootScope.marker.getPosition().lat()).appendTo(
								form);
						$('<input />').attr('type', 'hidden').attr('name',
								"lng").attr('value',
								rootScope.marker.getPosition().lng()).appendTo(
								form);
						$.ajax({
							type : $(form).attr('method'),
							url : $(form).attr('action'),
							data : $(form).serialize(),
							dataType : 'json'
						}).done(function(response) {
							if (response.STATUS == "1") {
								sMessage("Infromation",'Center add successfully');
								$("#regFormCluster").get(0).reset();
							} else {
								sMessage("Error",'Center registration fail');
							}
						});
					} else {
						sMessage("Warning","Please select position in google map");
					}
					return false;
				},
				highlight : function(element) {
					$(element).closest('.form-group').addClass('has-error');
				},
				unhighlight : function(element) {
					$(element).closest('.form-group').removeClass('has-error');
				},
				errorElement : 'span',
				errorClass : 'help-block',
				errorPlacement : function(error, element) {
					if (element.parent('.input-group').length) {
						error.insertAfter(element.parent());
					} else {
						error.insertAfter(element);
					}
				}
			});

}

function staffFormValid() {
	$('#staffRegForm').validate({
		rules : {
			email : {
				required : true,
				email : true
			},
			nic : {
				required : true
			},
			fname : {
				required : true
			},
			lname : {
				required : true
			},
			address1 : {
				required : true
			},
			address2 : {
				required : true
			},
			password : {
				required : true
			},
			rpassword : {
				required : true
			},
			sex : {
				required : true
			},
			cId : {
				required : true
			}
		},
		submitHandler : function(form) {
			$.ajax({
				type : $(form).attr('method'),
				url : $(form).attr('action'),
				data : $(form).serialize(),
				dataType : 'json'
			}).done(function(response) {
				if (response.STATUS == "1") {
					sMessage('Information','Staff Person add successfully');
					$("#staffRegForm").get(0).reset();
				} else {
					sMessage('Error','Staff Person add fail');
				}
			});
			return false;
		},
		highlight : function(element) {
			$(element).closest('.form-group').addClass('has-error');
		},
		unhighlight : function(element) {
			$(element).closest('.form-group').removeClass('has-error');
		},
		errorElement : 'span',
		errorClass : 'help-block',
		errorPlacement : function(error, element) {
			if (element.parent('.input-group').length) {
				error.insertAfter(element.parent());
			} else {
				error.insertAfter(element);
			}
		}
	});
}
/* End of jquery validators */