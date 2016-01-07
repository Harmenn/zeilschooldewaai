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
    $(".Subject").slideUp( "500", function() {
        // Animation complete.
    });
    $("#" + content).slideDown( "500", function() {
        // Animation complete.
    });

}