/**
 * This file contain validator files for forms
*/
//jquery validator new method

jQuery.validator.addMethod("lettersonly", function(value, element) {
  return this.optional(element) || /^[a-z]+$/i.test(value);
}, "Letters only please"); 

//end of new validator methods

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
					address2 : {
						required : true
					},
					phone : {
						digits: true,
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
					address2 : {
						required : true
					},
					phone : {
						digits: true,
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
									$('.clustupdate-msg-model').modal('toggle');
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
				lettersonly: true,
				required : true
			},
			lname : {
				lettersonly: true,
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
				lettersonly: true,
				required : true
			},
			lname : {
				lettersonly: true,
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
	$('#addEvent').validate({
		rules : {
			description: {
				required : true
			},
			orgName : {
				lettersonly: true,
				required : true
			},
			address1 : {
				required : true
			},
			address2 : {
				required : true
			},
			eParticipation : {
				required : true
			},
			phone : {
				digits: true,
				required : true
			},
			date : {
				required : true,
				date: true
			},
			stime : {
				required : true
			},
			etime : {
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
												'Event add successfully');
									} else {
										sMessage("Error",
												'Event add fail');
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
//end of add event form validator

//add blood request validator
function addBloodRequestValidator(){
	$('#blood_request').validate({
		rules : {
			description: {
				required : true
			},
			bType:{
				required : true
			},
			amount : {
				digits: true,
				required : true
			},
			edate : {
				required : true,
				date: true
			},
			etime : {
				required : true,
				time : true
			}
		},
		submitHandler : function(form) {
			$.ajax({
				type : $(form).attr('method'),
				url : $(form).attr('action'),
				data : $(form).serialize(),
				dataType : 'json'
				}).done(
					function(response) {
						if (response.STATUS == 1) {
							sMessage("Infromation",'Blood Request add successfully');
						} else {
							sMessage("Error",'Blood Request adding fail');
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
//end add blood request validator

// add blood method validator
function addBloodMethodValidator(){
	$('#blood_method').validate({
		rules : {
			description: {
				required : true
			},
			minAge:{
				digits: true,
				required : true
			},
			maxAge : {
				required : true,
				number : true
			},
			weigth : {
				digits: true,
				required : true
			},
			dParticipating : {
				digits: true,
				required : true
			},
			maxAmaount : {
				digits: true,
				required : true
			}
		},
		submitHandler : function(form) {
			$.ajax({
				type : $(form).attr('method'),
				url : $(form).attr('action'),
				data : $(form).serialize(),
				dataType : 'json'
				}).done(
					function(response) {
						if (response.STATUS == true) {
							sMessage("Infromation",'Blood Donation Method is add successfully');
						} else {
							sMessage("Error",'Blood Donation Method adding fail');
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
//end of blood method validator


//add particient validator
function addParticipageValid(){
	$('#addPartForm').validate({
		rules : {
			email: {
				required : true,
				email: true,
				remote: {
			        url: "part_controller/checkusercan",
			        type: "post",
			        data: {
				        	email:function(){
				        		return $("#email").val();
				        	},
				        	donation_method_dmId: function() {
				        		return $( "#donation_method_dmId" ).val();
				        	}
			        	}
		      	},
		      	messages: {
				    required: "Required input",
				    remote: "Donor not exist in the system please check the email again"
				 }
			},
			donation_method_dmId:{
				required : true
			},
		},
		submitHandler : function(form) {
			var rootScope = angular.element('#wrapper').scope();
			$('<input />').attr('type', 'hidden').attr('name',"event_evId").attr('value',rootScope.event_evId).appendTo(form);

			$.ajax({
				type : $(form).attr('method'),
				url : $(form).attr('action'),
				data : $(form).serialize(),
				dataType : 'json'
				}).done(
					function(response) {
						$('.addpart-msg-model').modal('toggle');
						if (response.STATUS == true) {
							sMessage('Blood participation add successfully',"Donor add to the system he cant make blood donation till 3 months");
						} else {
							sMessage("Error","Blood participate can\'t make donate may be she or he in 3 moths of participating and not eligible to make a blood reqeust");
						}
						rootScope.updatePart();
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
//end of add participation validator

