$(document).ready(function(){

/*Login form validator files*/
$('#loginForm').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      email: {
        validators: {
            emailAddress:{
                message: 'Please enter valid email address'
            },
            notEmpty: {
                message: 'The email is required'
            }
        }
      },
      password: {
        validators: {
            notEmpty: {
                message: 'The password is required'
            }
        }
      }
    }
}).on('success.form.bv',function(e){
      // Prevent form submission
      e.preventDefault();

      // Get the form instance
      var $form = $(e.target);

      // Get the BootstrapValidator instance
      var bv = $form.data('bootstrapValidator');

      // Use Ajax to submit form data
      $.post($form.attr('action'), $form.serialize(), function(result) {
        try{
          // Get plugin instance
          var bootstrapValidator = $('#loginForm').data('bootstrapValidator');
          //validate json states
          if(result['STATUS'] == "true"){
            window.location.reload();
          }else{
            bootstrapValidator.disableSubmitButtons(false);
            $('#logerror').css('visibility','visible');
            bootstrapValidator.updateStatus('email', 'INVALID','None');
            bootstrapValidator.updateStatus('password', 'INVALID','None');
          }
        }catch(e){
          alert('Exception while request..');
        }
      }, 'json');
    });
/*#########end of Login form validator files*/

/*Registration form validator files*/
$('#regForm').bootstrapValidator({
    message: 'This value is not valid',
    feedbackIcons: {
      valid: 'glyphicon glyphicon-ok',
      invalid: 'glyphicon glyphicon-remove',
      validating: 'glyphicon glyphicon-refresh'
    },
    fields: {
      email: {
        validators: {
            emailAddress:{
                message: 'Please enter valid email address'
            },
            notEmpty: {
                message: 'The email is required'
            }
        }
      },
      nic:{
        validators:{
          notEmpty:{
            message: 'Please enter your NIC number'
          }
        }
      },
      fname:{
        validators:{
          notEmpty:{
            message: 'Please enter your First Name'
          }
        }
      },
      lname:{
        validators:{
          notEmpty:{
            message: 'Please enter your Last Name'
          }
        }
      },
      address1:{
        validators:{
          notEmpty:{
            message: 'Please enter address1'
          }
        }
      },
      address2:{
        validators:{
          notEmpty:{
            message: 'Please enter address2'
          }
        }
      },
      password:{
        validators:{
          notEmpty:{
            message: 'The password is required and cannot be empty'
          },
          identical: {
              field: 'rpassword',
              message: 'The password and its confirm must be the same'
          }
        }
      },
      rpassword:{
        validators:{
          notEmpty:{
            message: 'Please re enter your password'
          },
          identical: {
              field: 'password',
              message: 'The password and its confirm must be the same'
          }
        }
      },
      dob:{
        validators:{
          date: {
            format: 'YYYY/MM/DD',
            message: 'The value is not a valid date'
          },
          notEmpty:{
            message: 'Date of Birth cannot be empty'
          }
        }
      },
      cId:{
        validators:{
          notEmpty:{
            message: 'Please select center'
          }
        }
      }
    }
}).on('success.form.bv',function(e){

  e.preventDefault();
  // Get the form instance
  var $form = $(e.target);
  // Get the BootstrapValidator instance
  var bv = $form.data('bootstrapValidator');
  var lat;
  var lng;

  console.log(marker.getPosition().lat());

  if(marker != null){
    $('<input />').attr('type', 'hidden')
          .attr('name', "lat")
          .attr('value', marker.getPosition().lat())
          .appendTo('#regForm');
    $('<input />').attr('type', 'hidden')
          .attr('name', "lng")
          .attr('value', marker.getPosition().lng())
          .appendTo('#regForm');
  }
  // Use Ajax to submit form data
  $.post($form.attr('action'), $form.serialize(), function(result) {
    try{
      // Get plugin instance
      var bootstrapValidator = $('#loginForm').data('bootstrapValidator');
      //validate json states
      if(result['STATUS'] == "true"){
        window.alert("You are register success fully");
        $('#loginModel').modal('toggle');
      }
    }catch(e){
      alert('Exception while request..');
    }
  }, 'json');
});
/*End of register form validation*/
});