<br />
<!-- Navigatie
----------------------------------------------------------------------------- -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#agenda" class="ContentBtn" data-content="Agenda"  role="tab" data-toggle="tab">Deze maand</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  class="ContentBtn" data-content="beginners"  data-toggle="tab">Beginners cursus</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  class="ContentBtn" data-content="ervaren"  data-toggle="tab">Ervaren cursus</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  class="ContentBtn" data-content="wadtochten"  data-toggle="tab">Wadtochten</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  class="ContentBtn" data-content="stap1_inschrijven"  data-toggle="tab">Inschrijven</a></li>
</ul>

<!-- Wat er deze maand laten zien wordt.
----------------------------------------------------------------------------- -->
<div id="Agenda" class="Subject">
    <div class="page-header">
        <h1 style="text-align: center;">In de planning</h1>
    </div>

        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot1.png" />
            <h3>Beginners cursus</h3>
            <p>
                De cursus zal starten in Week 2, 2016. in deze cursus wordt de basis van zeilen uitgelegd. deze cursus is geschikt voor de leeftijd 6 tot 80 jaar.
            </p>
            <div><a href="#agenda"  class="ContentBtn" data-content="beginners" >Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot2.jpg" />
            <h3>Wadtocht</h3>
            <p>
                Altijd als eens over de waddenzee willen zeilen? dat kan nu. laat u meenemen over de waddenzee voor een week. (deze cursus is geldig in week 3)
            </p>
            <div><a  href="#agenda" class="ContentBtn" data-content="wadtochten" >Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot3.jpg" />
            <h3>Beginners cursus</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient.
            </p>
            <div><a  href="#agenda"  class="ContentBtn" data-content="beginners" >Meer info</a></div>
        </div>
        
        <div class="spacer" style="clear: both;"></div>
</div>

<!-- Uitleg beginners cursus
----------------------------------------------------------------------------- -->
<div id="beginners" class="Subject" style="display: none;">
    <div class="col-md-7">
        <div class="page-header">
            <h1>Beginners cursus</h1>
        </div>
        Onze beginnerscursus wordt gegeven in stabiele boten. Wij hebben gekozen
        voor 16 kwadraat BM-ers. Voordat je met deze boten het water opgaat
        (onder begeleiding van een instructeur) moet je eerst een beetje van de theorie van het
        zeilen onder de knie krijgen. Deze theorie wordt onderwezen gedurende de eerste ochtend.
        Hier leer je waarop je moet letten als je een boot optuigt en aftuigt, hoe het roer werkt,
        welke zeiltypen je gaat gebruiken en de belangrijkste knopen.
        <br /><br />Je leert ook een aantal
        basisbegrippen, zoals: in de wind, voor de wind, halve wind, aan de wind , ruime wind, stuurboord,
        bakboord, over stag gaan, gijpen, laveren of kruisen en gedragsregels op het water. Ook wordt
        onderwezen hoe je deze begrippen tijdens het zeilen gaat toepassen. Tijdens het praktijkdeel
        van deze cursus leer je het geleerde toe te passen.
        <br /><br/>
    </div>
    <div class="col-md-5">
        <br /><br /><br />
        <img src="/zeilschooldewaai/app/templates/default/img/overons/zeilschool2.jpg" id="boten_sideImg" alt="Draak" />
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />
</div>

<!-- Uitleg Ervaren cursus
----------------------------------------------------------------------------- -->
<div id="ervaren" class="Subject" style="display: none;">
    <div class="col-md-7">
        <div class="page-header">
            <h1>Ervaren cursus</h1>
        </div>

        Onze gevorderdencursus wordt gegeven met draken. Dit zijn minder stabiel
        boten dan de BM-ers. Je leert hier met een spinaker te zeilen en, bij sterke
        wind, te zeilen met een trapeze. Je leert hier ook wat te doen indien een
        noodsituatie ontstaat (zoals man overboord, een klap met een giek en een stukje EHBO).
    </div>
    <div class="col-md-5">
        <br /><br /><br />
        <img src="/zeilschooldewaai/app/templates/default/img/boten/draak.jpg" id="boten_sideImg" alt="Draak" />
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />
</div>

<!-- uitleg Wadtochten
----------------------------------------------------------------------------- -->
<div id="wadtochten" class="Subject" style="display: none">
    <div class="col-md-7">
        <div class="page-header">
            <h1>Wadtochten</h1>
        </div>

        Uniek in bij onze zeilschool zijn, naast beginnerscursussen en gevorderdencursussen,
        de wadtochten. Dit zijn tochten over de Waddenzee onder begeleiding van een instructeur.
        Hier leert u hoe je moet zeilen op zee en zeilen in stromend water. De overnachtingen in
        deze cursus vinden op de Waddenzee zelf plaats! Dit kan doordat hier gebruik gemaakt wordt
        van Schouwen.
        <br />
        Dit zijn boten met platte bodems, zodat de boten bij laag tij op de zeebodem kunnen blijven
        liggen, zonder dat het schip kantelt. Een unieke ervaring voor de gevorderde zeiler!
    </div>
    <div class="col-md-5">
        <br /><br /><br />
        <img src="/zeilschooldewaai/app/templates/default/img/cursussen/wadden.jpg" id="boten_sideImg" alt="Draak" />
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />
</div>

<!--  Inschrijvingen
----------------------------------------------------------------------------- -->

<form onsubmit="SubmitForm()" method="post" id="CursusForm" action="">
    <input type="hidden" name="user_id" id="user_id" value="<?php echo \Helpers\Session::get('id'); ?>" />
    <!-- Stap 1
    ----------------------------------------------------------------------------- -->
    <div id="stap1_inschrijven" class="Subject" style="display: none">
        <div class="page-header">
            <h1>Kies een cursus</h1>
        </div>

        <?php if (\Helpers\Session::get('id')) { ?>
           <button type="button" class="btn btn-success" id="stap1">1. Keuze</button>
            <button type="button" id="stap2" class="btnstap btn btn-default disabled">2. Gegevens</button>
            <button type="button" id="stap3" class="btnstap btn btn-default disabled">3. Overzicht</button>
            <table class="table table-hover"  id="CursusTable">
                <thead>
                    <tr>
                        <th width="40px">#</th>
                        <th>Naam cursus</th>
                        <th width="100px">Prijs</th>
                        <th width="150px">Begindatum</th>
                        <th width="150px">Einddatum</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                        setlocale(LC_TIME, 'NL_nl');
                        foreach($data['Courses'] as $key => $value){
                            $id = $value->cursus_id;
                            $naam = $value->cursusnaam;
                            $beschrijving = $value->cursusomschrijving;
                            $prijs = $value->cursusprijs;
                            $startdatum = $value->startdatum;
                            $startdatum = date("j M Y",strtotime($startdatum));
                            $einddatum = $value->einddatum;
                            $einddatum = date("j M Y",strtotime($einddatum));

                            echo '
                                <tr data-cursusid="'.$id.'" class="CursusRij" title="'.$beschrijving.'">
                                    <td><input type="radio" id="cursus'.$id.'" name="cursus" value="'.$id.'" /><div class="SelectArrow" id="CursusIcon'.$id.'" ></div></td>
                                    <td>'.$naam.'</td>
                                    <td>&euro; '.$prijs.'</td>
                                    <td>'.$startdatum.'</td>
                                    <td>'.$einddatum.'</td>
                                </tr>
                            ';
                        }
                    ?>


                </tbody>
            </table>
        <?php } else{ ?>
            Maak eerst een account aan of log-in voordat je je kunt inschrijven.
        <?php } ?>
    </div>
    <!-- Stap 2
    ----------------------------------------------------------------------------- -->

    <div id="stap2_inschrijven" class="Subject" style="display: none">
        <div class="page-header">
            <h1>2. Gegevens</h1>
        </div>
        <div id="messages"></div>

        <button type="button" class="btn btn-default btnstap" id="stap1">1. Keuze</button>
        <button type="button" id="stap2" class=" btn btn-success">2. Gegevens</button>
        <button id="stap3" type="button" class="btnstap btn btn-default disabled">3. Overzicht</button>
        <br />
        <div class="col-md-7">
            <br /><br />
            <p>
                Uiteraard hebben wij uw gegevens al waardoor u alleen<br /> nog maar uw opmerkingen hoeft in te vullen.
            </p>
            <br />
            <label>Uw wachtwoord <i title="Dit is om te voorkomen dat de verkeerde personen aan de cursussen gekoppeld worden." class="fa fa-question-circle"></i></label>
            <input type="password" class="form-control" id="Password" name="password">

            <label>Opmerkingen / Vragen / Voorkeur</label>
            <textarea class="form-control" id="Comments" name="comments"></textarea>
            <span id="CountDown">250</span>
            <br />
            <input type="checkbox" alt="Ik accepteer de voorwaarden" id="voorwaarden" name="voorwaarden" />
            <label id="voorwaardenLabel" for="voorwaarden" style="font-weight: normal;">Ik heb de voorwaarden gelezen en ga hiermee akkoord.</label><br />
            <input type="submit" class="btn btn-primary" id="VerstuurKnop" name="Verstuur" value="Inschrijven"/>
        </div>
        <div class="spacer" style="clear: both;"></div>
        <br />
        <br />

    </div>
    <!-- Stap 3
    ----------------------------------------------------------------------------- -->

    <div id="stap3_inschrijven" class="Subject" style="display: none">
        <div class="page-header">
            <h1>3. Overzicht</h1>
        </div>
        <button type="button" class="btn btn-default disabled" id="stap1">1. Keuze</button>
        <button type="button" id="stap2" class=" btn btn-default disabled">2. Gegevens</button>
        <button id="stap3" type="button" class=" btn btn-success">3. Overzicht</button>
        <br />
        <div class="col-md-7">
            <Br />
            <div class="alert alert-success" role="alert">
                <h2>Gefeliciteerd.</h2>
                <p>
                    u heeft zich succesvol ingeschreven voor de cursus.
                </p>
            </div>
            <table class="table">
                <tr>
                    <th>Cursus</th>
                    <td id="gekozenCursusnaam"></td>
                </tr>
                <tr>
                    <th>Prijs</th>
                    <td id="gekozenCursusprijs"></td>
                </tr>
                <tr>
                    <th>Omschrijving</th>
                    <td id="gekozenCursusomschrijving"></td>
                </tr>
                <tr>
                    <th>Datum</th>
                    <td><b><span id="gekozenCursusbegin"></span></b> tot <b><span id="gekozenCursuseind"></span></b></td>
                </tr>
            </table>
        </div>
        <div class="spacer" style="clear: both;"></div>
        <br />
        <br />
    </div>
</form>