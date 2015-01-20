/*

this is main page scripts

*/

var root = "http://10.0.2.2/itranfuzz.info";
//var root = "http://127.0.0.1/itranfuzz.info";

function remoteCall(){
	var path = root+'/webapi/getDonorDetails'+'/a@gmail.com';
	$.ajax({url: path,
		type: 'get',
		success: function (result) {
			a = jQuery.parseJSON(result);
			//alert(result);
			Android.showToast(result);
		}
	});
	//Android.showToast("2 here");
}


function initFunction(){
    $("a[data-role=tab]").each(function () {
        var anchor = $(this);
        anchor.bind("click", function () {
            $.mobile.changePage(anchor.attr("href"), {
                transition: "none",
                changeHash: false
            });
            return false;
        });
    });
    $("div[data-role=page]").bind("pagebeforeshow", function (e, data) {
        $.mobile.silentScroll(0);
        $.mobile.changePage.defaults.transition = 'slide';
    });
}
$(document).on('pageinit', '#home', function(){
    initFunction();
    $(document).on('click','#eventview li',function(e){ 
        $.mobile.changePage($("#page-1"),"slide",true, true);
    });
    remoteCall();
});
