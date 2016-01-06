jQuery("document").ready(function($) {
    var nav = $('#navbar');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 160) {
            nav.css('position', 'fixed');
            nav.css('top','0px');
        } else {
            nav.css('position', 'absolute');
            nav.css('top','160px');
        }
    });
});

$('.carousel').carousel({
    interval: 5000
})

$( "#ResponsiveTrigger" ).click(function() {
    $( ".responsiveMenu" ).slideToggle( "200", function() {
        // Animation complete.
    });
});

function ChangeContent(content){
    $(".BootSubject").fadeOut( "300", function() {
        // Animation complete.
    });
    $("#" + content).delay('300').fadeIn( "300", function() {
        // Animation complete.
    });

}