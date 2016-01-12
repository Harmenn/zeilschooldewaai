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
        $("#messages").html('');
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

$('#CursusForm').submit(function (e) {
    e.preventDefault();
    $("#messages").html('');

    $.post( "/zeilschooldewaai/app/api/cursussen.php?action=1", $('form').serialize())
        .done(function( data ) {
            console.log('==== Data =====');
            if(data == 'voorwaarden niet geaccepteerd'){
                $("#voorwaardenLabel").css('color','#b20000');
                $("#voorwaardenLabel").attr('title','U moet eerst de voorwaarden accepteren');
                $("#voorwaarden").css('border','#b20000');
            }else if(data == 'Inschrijving bestaat al'){
                $("#messages").html('');
                $("#messages").html('<div class="alert alert-danger" role="alert">Deze inschrijving bestaat al.</div>');
            } else if(data == 'Wachtwoord verkeerd') {
                $("#messages").html('');
                $("#messages").html('<div class="alert alert-danger" role="alert">Wachtwoord incorrect.</div>');
            }else{
                $(".Subject").slideUp( "500", function() {  });
                $("#stap3_inschrijven").slideDown( "500", function() {  });
                data = JSON.parse(data);
                data = data[0];
                console.log(data.cursusnaam);

                $("#gekozenCursusnaam").html(data.cursusnaam);
                $("#gekozenCursusprijs").html('&euro; ' + data.cursusprijs);
                $("#gekozenCursusomschrijving").html(data.cursusomschrijving);
                $("#gekozenCursusbegin").html(data.startdatum);
                $("#gekozenCursuseind").html(data.einddatum);
            }


        });
});
