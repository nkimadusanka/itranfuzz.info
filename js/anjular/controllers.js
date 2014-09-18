/**
 * this contain all details about angular js controllers
 */

main_app.controller('mapController',['$scope','$rootScope',function($scope,$rootScope){
	try{
	$rootScope.initialize();
	clusterFormValid();
	}catch(e){
		window.alert("This is catch exception");
	}
}]);

function clusterFormValid(){
	$('#regFormCluster').validate({
	    rules: {
	    	province: {
	            required: true
	        },
	        address1: {
	            required: true
	        },
	        address1: {
	            required: true
	        },
	        address2: {
	            required: true
	        },
	        phone: {
	            required: true
	        },
	        ctype: {
	            required: true
	        }
	    },
	    submitHandler: function(form) {
	    	var rootScope = angular.element('#wrapper').scope();
	    	if(rootScope.marker.getMap() != null){
	    		$('<input />').attr('type', 'hidden')
		          .attr('name', "lat")
		          .attr('value',rootScope.marker.getPosition().lat())
		          .appendTo(form);
		    	$('<input />').attr('type', 'hidden')
		          .attr('name', "lng")
		          .attr('value', rootScope.marker.getPosition().lng())
		          .appendTo(form);
		    	$.ajax({
		    	        type: $(form).attr('method'),
		    	        url: $(form).attr('action'),
		    	        data: $(form).serialize(),
		    	        dataType : 'json'
		    	    })
		    	    .done(function (response) {
		    	        if (response.success == 'success') {               
		    	            alert('success');                       
		    	        } else {
		    	            alert('fail');
		    	        }
		    	    });
	    	}else{
	    		window.alert("Please select position in google map");
	    	}
	    	 return false;
	    },
	    highlight: function(element) {
	        $(element).closest('.form-group').addClass('has-error');
	    },
	    unhighlight: function(element) {
	        $(element).closest('.form-group').removeClass('has-error');
	    },
	    errorElement: 'span',
	    errorClass: 'help-block',
	    errorPlacement: function(error, element) {
	        if(element.parent('.input-group').length) {
	            error.insertAfter(element.parent());
	        } else {
	            error.insertAfter(element);
	        }
	    }
});

}