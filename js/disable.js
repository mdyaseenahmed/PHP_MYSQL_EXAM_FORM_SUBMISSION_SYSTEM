//Disables Mouse Right Click..
$(document).ready(function () {
    $("body").on("contextmenu",function(e){
        return false;
    });
});

//Disables Cut,Copy & Paste...
$(document).ready(function () {
    $('body').bind('cut copy paste', function (e) {
        e.preventDefault();
    });
});
