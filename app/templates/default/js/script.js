jQuery("document").ready(function($) {
    var nav = $('#navbar');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 160) {
            nav.css('position: fixed');
            nav.css('top','0px');
        } else {
            nav.css('position: absolute');
            nav.css('top','160px');
        }
    });
});