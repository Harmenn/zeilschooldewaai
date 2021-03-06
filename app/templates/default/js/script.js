/* Sticky navigation
 ================================================================================== */
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

/* Bootstrap slideshow
 ================================================================================== */
$('.carousel').carousel({
    interval: 3000
})

/* Mobiele gebruikers menu
 ================================================================================== */
$( "#ResponsiveTrigger" ).click(function() {
    $( ".responsiveMenu" ).slideToggle( "200", function() {
        // Animation complete.
    });
});

/* Tabs menu
 ================================================================================== */
/* default */
$(".ContentBtn").click(function() {
    if ( $( this ).hasClass( "active" ) ) {
        //console.log('NEUP');
    }else{
        $(".ContentBtn").removeClass('active');
        $(this).addClass('active');
        var content = $(this).attr('data-content');
        $(".Subject").slideUp( "500", function() {  });
        $("#" + content).slideDown( "500", function() {  });
    }
});

/* responsive variant */
$( ".RespTabNav" ).change(function() {
    var content = $(this).val();
    $(".Subject").slideUp( "500", function() {  });
    $("#" + content).slideDown( "500", function() {  });
});


/* Inschrijven
 ================================================================================== */

// tabel van stap 1
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

// Switchen tussen de stappen
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

// opmerkingen veld laat zien hoeveel karakters je nog heb.
$("#Comments").keyup(function() {
    //console.log( "Handler for .keypress() called." );
    var cnt = $(this).val().length;
    var resterend = 250 - cnt;
    $("#CountDown").html(resterend);
});

// AJAX api om gebruikers in te schrijven in een cursus
$('#CursusForm').submit(function (e) {
    // zorgt ervoor dat het formulier niet submit
    e.preventDefault();

    // haalt alle berichten weg om evt plaats te maken voor nieuwe
    $("#messages").html('');

    //Stuurt data naar de api
    $.post( "/zeilschooldewaai/app/api/cursussen.php?action=1", $('form').serialize())
        .done(function( data ) {
            console.log('==== Data =====');

            // als de voorwaarden nog niet geaccepteerd zijn
            if(data == 'voorwaarden niet geaccepteerd'){
                $("#voorwaardenLabel").css('color','#b20000');
                $("#voorwaardenLabel").attr('title','U moet eerst de voorwaarden accepteren');
                $("#voorwaarden").css('border','#b20000');

            // als de inschrijving al bestaat
            }else if(data == 'Inschrijving bestaat al'){
                $("#messages").html('');
                $("#messages").html('<div class="alert alert-danger" role="alert">Deze inschrijving bestaat al.</div>');

            // als het wachtwoord niet ingevoerd is (dit wachtwoord is om veiligheidsredenen).
            } else if(data == 'Wachtwoord verkeerd') {
                $("#messages").html('');
                $("#messages").html('<div class="alert alert-danger" role="alert">Wachtwoord incorrect.</div>');

            // als de inschrijving door de validatie heen is, vervolgd de procedure
            }else{
                // navigatie naar laatste stap
                $(".Subject").slideUp( "500", function() {  });
                $("#stap3_inschrijven").slideDown( "500", function() {  });

                // data ophalen
                data = JSON.parse(data);
                data = data[0];

                // gekozen cursus laten zien aan de gebruiker
                $("#gekozenCursusnaam").html(data.cursusnaam);
                $("#gekozenCursusprijs").html('&euro; ' + data.cursusprijs);
                $("#gekozenCursusomschrijving").html(data.cursusomschrijving);
                $("#gekozenCursusbegin").html(data.startdatum);
                $("#gekozenCursuseind").html(data.einddatum);

                // post naar de pagina die de mail verstuurd
                $.ajax({
                    method: "POST",
                    url: "/zeilschooldewaai/cursussen/validatie",
                    data: {
                        user_id: $("#user_id").val(),
                        cursus_id: data.cursus_id,
                        comment: $("#Comments").val()
                    },
                    success: function (data) {
                        // mail is verstuurd
                    },
                    done: function( data ) {
                        // mail is verstuurd
                    }
                });
            }


        });
});


/* Superadmin
================================================================================== */
/* beheerders toevoegen */
$("#BeheerderToevoegen").click(function(){

    // gegevens verzamelen
    var items = [ "voorletters", "voornaam","tussenvoegsel","achternaam","mobiel","email","wachtwoord"];
    var body = '';

    // loop door de gegevens die ingevoerd moeten worden
    for (var i = 0; i < items.length; i++) {
        body += '<tr><th>' + items[i] + '</th><td><input type="text" name="' + items[i] + '" class="form-control" placeholder="Voer ' + items[i] + ' in.." required/></td></tr>';
    }

    // onderdelen in de modal zetten
    $("#AdminModalHeader").html('Beheerder toevoegen');
    $("#AdminModalBody").html(body);
    $('#SaveBtn').attr('data-action','1');

    // modal laten zien
    $('#AdminModal').modal('show');
});

/* beheerder wijzigen */
$(".EditRow").click(function() {

    // id ophalen
    var id = $(this).attr('data-id');

    //gegevens ophalen
    $.ajax({
        method: "POST",
        url: "/zeilschooldewaai/app/api/beheer.php?action=2",
        data: {
            user_id: id
        },
        success: function( data ) {

            // data verzamelen
            data = JSON.parse(data);
            data = data[0];

            // input velden genereren
            body = '<tr><th>Id:</th><td><input type="hidden" name="klant_id" value="' + id + '" />' + id + '</td></tr>';
            $.each(data, function(key, value){
                body += '<tr><th>' + key + ':</th><td><input type="text" name="' + key + '" value="' + value + '" class="form-control" placeholder="Voer ' + key + ' in.."/></td></tr>';
            });
            body += '<tr><th>wachtwoord:</th><td><input type="text" name="wachtwoord" class="form-control" placeholder="Voer nieuw wachtwoord in.." /></td></tr>';

            // modal vullen met gegevens
            $("#AdminModalHeader").html('Beheerder wijzigen');
            $("#AdminModalBody").html(body);
            $('#SaveBtn').attr('data-action','3');

            // modal laten zien
            $('#AdminModal').modal('show');
        }
    });
});

/* Gebruiker verwijderen */
$(".DeleteRow").click(function(){
    var klant_id = $(this).attr('data-id');

    body = '<input type="hidden" name="klant_id" value="' + klant_id + '" /> Weet u zeker dat u deze beheerder wil verwijderen?';

    $("#AdminModalHeader").html('Beheerder verwijderen');
    $("#AdminModalBody").html(body);
    $('#SaveBtn').attr('data-action','4');
    $('#SaveBtn').html('Verwijder gebruiker');
    $('#SaveBtn').attr('class','btn btn-danger');

    // modal laten zien
    $('#AdminModal').modal('show');
});


/* Formulier Submitten */
$('#AdminForm').submit(function (e) {
    // zorgt ervoor dat het formulier niet submit
    e.preventDefault();

    // type CRUD defineren
    var action = $('#SaveBtn').attr('data-action');

    // send dem data to validation
    $.post( "/zeilschooldewaai/app/api/beheer.php?action=" + action, $('form').serialize())
        .done(function( data ) {
            console.log(data);
            location.reload();
    });
});

