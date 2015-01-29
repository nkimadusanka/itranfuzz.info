/*

this is main page scripts

*/

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
});
