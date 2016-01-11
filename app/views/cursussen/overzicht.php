<br />
<!-- Navigatie
----------------------------------------------------------------------------- -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#agenda" onclick="ChangeContent('Agenda')" role="tab" data-toggle="tab">Deze maand</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('beginners')" data-toggle="tab">Beginners cursus</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('ervaren')" data-toggle="tab">Ervaren cursus</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('wadtochten')" data-toggle="tab">Wadtochten</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('stap1_inschrijven')" data-toggle="tab">Inschrijven</a></li>
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
            <div><a href="#agenda"  onclick="ChangeContent('beginners')">Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot2.jpg" />
            <h3>Wadtocht</h3>
            <p>
                Altijd als eens over de waddenzee willen zeilen? dat kan nu. laat u meenemen over de waddenzee voor een week. (deze cursus is geldig in week 3)
            </p>
            <div><a  href="#agenda"  onclick="ChangeContent('wadtochten')">Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot3.jpg" />
            <h3>Beginners cursus</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient.
            </p>
            <div><a  href="#agenda"  onclick="ChangeContent('beginners')">Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot1.png" />
            <h3>Ervaren cursus</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient.
            </p>
            <div><a  href="#agenda"  onclick="ChangeContent('ervaren')">Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot4.jpg" />
            <h3>Wadtocht</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient.
            </p>
            <div><a  href="#agenda"  onclick="ChangeContent('wadtochten')">Meer info</a></div>
        </div>
        <div class="AgendaItem">
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot5.jpg" />
            <h3>Beginners cursus</h3>
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit.
                Aenean commodo ligula eget dolor. Aenean massa. Cum sociis natoque
                penatibus et magnis dis parturient.
            </p>
            <div><a  href="#agenda"  onclick="ChangeContent('beginners')">Meer info</a></div>
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

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,

        <Br /><BR />
        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
        ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
        viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque
        rutrum. Aenean imperdiet. Etiam ultricies
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

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,

        <Br /><BR />
        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
        ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
        viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque
        rutrum. Aenean imperdiet. Etiam ultricies
        <br /><br/>
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

        Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
        ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis dis
        parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies nec,
        pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim. Donec pede justo,

        <Br /><BR />
        fringilla vel, aliquet nec, vulputate eget, arcu. In enim justo, rhoncus ut, imperdiet a,
        venenatis vitae, justo. Nullam dictum felis eu pede mollis pretium. Integer tincidunt.
        Cras dapibus. Vivamus elementum semper nisi. Aenean vulputate eleifend tellus. Aenean leo
        ligula, porttitor eu, consequat vitae, eleifend ac, enim. Aliquam lorem ante, dapibus in,
        viverra quis, feugiat a, tellus. Phasellus viverra nulla ut metus varius laoreet. Quisque
        rutrum. Aenean imperdiet. Etiam ultricies
        <br /><br/>
    </div>
    <div class="col-md-5">
        <br /><br /><br />
        <img src="/zeilschooldewaai/app/templates/default/img/cursussen/wadden.jpg" id="boten_sideImg" alt="Draak" />
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />
</div>


<!-- Stap 1 Inschrijvingen
----------------------------------------------------------------------------- -->
<div id="stap1_inschrijven" class="Subject" style="display: none">
    <div class="page-header">
        <h1>Kies een cursus</h1>
    </div>
    <?php if (\Helpers\Session::get('id')) { ?>
       <button class="btn btn-success btnstap" id="stap1">Stap 1</button> <button id="stap2" class="btnstap btn btn-default disabled">Stap 2</button> <button id="stap3" class="btnstap btn btn-default disabled">Stap 3</button> <button id="stap4" class="btnstap btn btn-default disabled">Stap 4</button>
        <table class="table table-hover"  id="CursusTable">
            <thead>
                <tr>
                    <th width="40px">#</th>
                    <th>Naam cursus</th>
                    <th width="150px">Begindatum</th>
                    <th width="150px">Einddatum</th>
                </tr>
            </thead>
            <tbody>
                <tr data-cursusid="1" class="CursusRij">
                    <td><input type="radio" id="cursus1" name="cursus" value="1" /><div class="SelectArrow" id="CursusIcon1" ></div></td>
                    <td>Beginnerscursus voor Beginners</td>
                    <td>10 januari 2016</td>
                    <td>15 januari 2016</td>
                </tr>
                <tr data-cursusid="2" class="CursusRij">
                    <td><input type="radio" id="cursus2" name="cursus" value="2" /><div class="SelectArrow" id="CursusIcon2" ></div></td>
                    <td>Waddentocht</td>
                    <td>21 februari 2016</td>
                    <td>26 februari 2016</td>
                </tr>
                <tr data-cursusid="3" class="CursusRij">
                    <td><input type="radio" id="cursus3" name="cursus" value="3" /><div class="SelectArrow" id="CursusIcon3" ></div></td>
                    <td>Ervaren cursus</td>
                    <td>13 maart 2016</td>
                    <td>18 maart 2016</td>
                </tr>
                <tr data-cursusid="4" class="CursusRij">
                    <td><input type="radio" id="cursus4" name="cursus" value="4" /><div class="SelectArrow" id="CursusIcon4" ></div></td>
                    <td>Zomertocht</td>
                    <td>04 April 2016</td>
                    <td>10 April 2016</td>
                </tr>

            </tbody>
        </table>
    <?php } else{ ?>
        Maak eerst een account aan of log-in voordat je je kunt inschrijven.
    <?php } ?>
</div>
<div id="stap2_inschrijven" class="Subject" style="display: none">
    <div class="page-header">
        <h1>Benodigde informatie</h1>
    </div>
    <button class="btn btn-default btnstap" id="stap1">Stap 1</button> <button id="stap2" class="btnstap btn btn-success">Stap 2</button> <button id="stap3" class="btnstap btn btn-default">Stap 3</button> <button id="stap4" class="btnstap btn btn-default disabled">Stap 4</button>
    <br />
    <div class="col-md-7">
        <br /><br />
        <p>
            uiteraard hebben wij uw gegevens al waardoor u alleen<br /> nog maar uw voorkeur, vragen en/of opmerkingen hoeft in te vullen.
        </p>
        <br />
        <label>Opmerkingen / Vragen / Voorkeur</label>
        <textarea class="form-control" id="Comments" name="comments"></textarea>
        <span id="CountDown">250</span>
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />

</div>
<div id="stap3_inschrijven" class="Subject" style="display: none">
    <div class="page-header">
        <h1>Voorwaarden</h1>
    </div>
    <button class="btn btn-default btnstap" id="stap1">Stap 1</button> <button id="stap2" class="btnstap btn btn-default">Stap 2</button> <button id="stap3" class="btnstap btn btn-success">Stap 3</button> <button id="stap4" class="btnstap btn btn-default disabled">Stap 4</button>
    <br />
    <div class="col-md-7">
        <br /><br />
        <p>
            Dit is de laatste stap, Als u op "Inschrijven" klikt<br /> wordt u ingeschreven in de aangevraagde cursus.
        </p>
        <br />
        <input type="checkbox" alt="Ik accepteer de voorwaarden" name="voorwaarden" />
        <label>Ik accepteer de <a href="">Voorwaarden</a> </label><br />
        <input type="submit" class="btn btn-primary" name="Verstuur" value="Inschrijven"/>
    </div>
    <div class="spacer" style="clear: both;"></div>
    <br />
    <br />

</div>