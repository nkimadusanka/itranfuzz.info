/**
 * This file contain validator files for forms
*/
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
						}).done(
								function(response) {
									if (response.STATUS == "1") {
										sMessage("Infromation",
												'Center add successfully');
										$("#regFormCluster").get(0).reset();
									} else {
										sMessage("Error",
												'Center registration fail');
									}
								});
					} else {
						sMessage("Warning",
								"Please select position in google map");
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

function clusterFormUpdateValid() {
	$('#updateFormCluster').validate(
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
						}).done(
								function(response) {
									if (response.STATUS == 1) {
										sMessage("Infromation",
												'Center Updated successfully');
									} else {
										sMessage("Error",
												'Center Update fail');
									}
								});
					} else {
						sMessage("Warning",
								"Please select position in google map");
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


/*cluster form validation in here*/
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
					sMessage('Information', 'Staff Person add successfully');
					$("#staffRegForm").get(0).reset();
				} else {
					sMessage('Error', 'Staff Person add fail');
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


function donorRegValid() {
	$('#regForm').validate({
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
						}).done(
								function(response) {
									if (response.STATUS == "true") {
										sMessage("Infromation",
												'Donor Add successfully');
										$("#regForm").get(0).reset();
									} else {
										sMessage("Error",
												'Donor registration fail');
									}
								});
					} else {
						sMessage("Warning",
								"Please select position in google map");
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
/* End of jquery validators */

//add event form validator
function eventAddValidator() {
	$('#addEvemt').validate({
		rules : {
			email : {
				required : true,
				email : true
			},
			description: {
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



//end of add event form validator
