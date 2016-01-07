jQuery("document").ready(function($) {
    var nav = $('#navbar');
    $(window).scroll(function () {
        if ($(this).scrollTop() > 200) {
            nav.css('position', 'fixed');
            nav.css('top','0px');
        } else {
            nav.css('position', 'absolute');
            nav.css('top','200px');
        }
    });
});

$('.carousel').carousel({
    interval: 3000
})

$( "#ResponsiveTrigger" ).click(function() {
    $( ".responsiveMenu" ).slideToggle( "200", function() {
        // Animation complete.
    });
});

function ChangeContent(content){
    $(".Subject").fadeOut( "300", function() {
        // Animation complete.
    });
    $("#" + content).delay('300').fadeIn( "300", function() {
        // Animation complete.
    });

}