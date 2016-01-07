<?php
/**
 * Sample layout
 */

use Core\Language;

?>


<br />
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#OnzeVloot" onclick="ChangeContent('zeilschool')" role="tab" data-toggle="tab">De zeilschool</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('hostel')" data-toggle="tab">Het hostel</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('Route')" data-toggle="tab">Route</a></li>

</ul>

<div id="zeilschool" class="Subject">

    <br />
    <div class="row">
        <div class="col-md-7">
            <div class="page-header">
                <h2>De zeilschool</h2>
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
            nisi vel augue.
        </div>
        <div class="col-md-5">
            <br />
            <div id="carousel-zeilschool" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-zeilschool" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-zeilschool" data-slide-to="1"></li>
                    <li data-target="#carousel-zeilschool" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/zeilschool1.jpg" alt="Terrein" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/zeilschool2.jpg" alt="Instructeur" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/zeilschool3.jpg" alt="terrein vanuit de lucht" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-zeilschool" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-zeilschool" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="hostel" class="Subject">
    <br />
    <div class="row">
        <div class="col-md-7">
            <div class="page-header">
                <h2>Het hostel (Bed and Breakfast)</h2>
            </div>
            Het hostel ligt op loopafstand van het plaatsje Warns aan de Westelijke zijde. Hier zal tijdens de zeilcursussen
            een verblijfplaats zijn voor de gasten. in het dorpje warns zijn een supermarkt, een slager, een groenteboer en een aantal cafe's te vinden.

            <Br /><BR />
            Het hostel is van alle gemakken voorzien: Er is een bar, een gezamelijke ruimte voor de gasten en een terras. dit om ervoor te zorgen dat de gasten zich niet hoeven te vervelen buiten de cursustijden.
            <br /><br/>
        </div>
        <div class="col-md-5">
            <br />
            <div id="carousel-hostel" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-hostel" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-hostel" data-slide-to="1"></li>
                    <li data-target="#carousel-hostel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/hostel1.jpg" alt="Gezamelijke ruimte hostel" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/hostel2.jpg" alt="Slaapkamers hostel" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                    <div class="item">
                        <img src="/zeilschooldewaai/app/templates/default/img/overons/hostel3.jpg" alt="Voorkant hostel" style="width: 100%">
                        <div class="carousel-caption"></div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-hostel" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-hostel" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</div>
<div id="Route" class="Subject" style="display: none">
    <div class="row">
        <br />

        <div class="col-md-7">
            <div class="page-header">
                <h2>Route</h2>
            </div>
            <b>Vanaf Lemmer (A6)</b><br />
            <ul>
                <li>Neem afslag 17-Lemmer naar N359 richting Lemmer/Balk</li>
                <li>Sla linksaf naar 22/Pasveer/N359</li>
                <li>Neem op de rotonde de 2e afslag nar Sudersewei/N359</li>
                <li>Neem op de rotonde de 3e afslag naar Gaaikemastraat/N359</li>
                <li>Sla Linksaf naar Flinkeboskje</li>
                <li>Vervolg de weg naar De Soal</li>
                <li>Sla rechtsaf de Buoren straat in richting Molkwerum</li>
                <li>Sla linksaf de Middelweg in richting Stavoren</li>
            </ul>


        </div>
        <div class="col-md-5">
            <br /><br /><br /><br /><br />
            <iframe class="home_map" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d77090.91150382684!2d5.372949701799224!3d52.856762982829274!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47c895a2b353cd9b%3A0x29a949f02a712d45!2s8721+Warns!5e0!3m2!1snl!2snl!4v1452083014828" width="600" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>

        </div>
    </div>
</div>