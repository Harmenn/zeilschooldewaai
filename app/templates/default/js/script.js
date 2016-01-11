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
    $(".Subject").slideUp( "500", function() {  });
    $("#" + content).slideDown( "500", function() {  });
}

$(".CursusRij").click(function() {
    $(".SelectArrow").removeClass('active');
    $("tr").css("background-color", "#fff");
    var cursusId = $(this).attr('data-cursusid');
    $('#cursus' + cursusId).prop('checked', true);
    $("#CursusIcon" + cursusId).addClass('active');
    $("#stap2").removeClass('disabled');
    $(this).css("background-color", "#eee");
    //CursusIcon
});

$(".btnstap").click(function() {
    if ( $( this ).hasClass( "disabled" ) ) {
        console.log('test');
    }else{
        var stap = $(this).attr('id');
        console.log(stap);
        $(".Subject").slideUp( "500", function() {  });
        $("#" + stap + "_inschrijven").slideDown( "500", function() {  });
    }
});

$("#Comments").keyup(function() {
    //console.log( "Handler for .keypress() called." );
    var cnt = $(this).val().length;
    var resterend = 250 - cnt;
    $("#CountDown").html(resterend);
});