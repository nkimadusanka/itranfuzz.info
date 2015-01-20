//root site name
var root = "http://10.0.2.2/itranfuzz.info";

$(document).on('pageinit', '#login', function(){ 
       $(document).on('click', '#submit', function() { // catch the form's submit event
        
       //checking the email address of the text box
       var x = document.forms["loginform"]["email"].value;
       var atpos = x.indexOf("@");
       var dotpos = x.lastIndexOf(".");
    			if (x == null || x == "") {
    				Android.showToast("Email can not be empty");
						//popDialog(1,"Email can not be empty");
        	return false;
    			}
        if (atpos< 1 || dotpos<atpos+2 || dotpos+2>=x.length) {
        		Android.showToast("Invalid Email Address");
        		//popDialog(1,"Invalid Email Address");
          return false;
       }
					$.ajax({url: root+'/webapi/jlogin',
                        data: $('#loginform').serialize(),
                        type: 'post',                  
                        async: 'true',
                        dataType: 'json',
                        beforeSend: function() {
                            // This callback function will trigger before data is sent
                            $.mobile.loading('show'); // This will show ajax spinner
                        },
                        complete: function() {
                            // This callback function will trigger on data sent/received complete
                            $.mobile.loading('hide'); // This will hide ajax spinner
                        },
                        success: function (result) {
                            if(result['STATUS'] == "true") {
                             	   if(Android.saveSession(document.forms["loginform"]["email"].value,document.forms["loginform"]["password"].value)){
                             	   	window.location.replace("file:///android_asset/index.html");
                            	   	}else{
                            	   		Android.showToast("Something went wrong");
                            	   		}
                            } else {
                            				Android.showToast("Invalid Username or Password");
                            }
                        },
                        error: function (request,error) {
                                    //**********for dummy***************//
                                    if(Android.saveSession("a@gmail.com",123)){
                             	   	window.location.replace("file:///android_asset/index.html");
                            	   	}else{
                            	   		Android.showToast("Something went wrong");
                            	   		}
                                    //***********************************//
                        			Android.showToast(""+error);          
                        }
                    });
       return false; // cancel original event to prevent form submitting
        });   
});

//pop up dialog function
function popDialog(mType,msg){
	if(mType == 1){
			$("#mgHead").text("Warning");
	}
	$("#mgCont").text(msg);
	$.mobile.changePage('#basic', 'pop', true, true);
}
