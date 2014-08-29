$(document).ready(function(){

/* activate scrollspy menu */
$('body').scrollspy({
  target: '#navbar-collapsible',
  offset: 50
});

/* smooth scrolling sections */
$('a[href*=#]:not([href=#])').click(function() {
    if (location.pathname.replace(/^\//,'') == this.pathname.replace(/^\//,'') && location.hostname == this.hostname) {
      var target = $(this.hash);
      target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
      if (target.length) {
        $('html,body').animate({
          scrollTop: target.offset().top - 50
        }, 1000);
        return false;
      }
    }
});

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
    },
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
            /*
            Have big error in here
            */
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

});