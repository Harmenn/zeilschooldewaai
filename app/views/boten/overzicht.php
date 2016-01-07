<?php
/**
 * Sample layout
 */

use Core\Language;

?>


<br />
<!-- Nav tabs -->
<ul class="nav nav-tabs" role="tablist">
    <li role="presentation" class="active"><a href="#OnzeVloot" onclick="ChangeContent('OnzeVloot')" role="tab" data-toggle="tab">Onze vloot</a></li>
    <li role="presentation"><a href="#Soorten" role="tab"  onclick="ChangeContent('BootTypes')" data-toggle="tab">Soorten Boten</a></li>
</ul>

<div id="OnzeVloot" class="Subject">
    <div class="page-header">
        <h1 style="text-align: center">Onze vloot</h1>
    </div>
    <div class="row" id="OnzeVloot">
        <div class="col-md-8">
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
        <div class="col-md-4">
            <img src="https://www.academycoaching.nl/wp-content/uploads/2015/06/Zeilen-Genietmoment-Jolien.jpg" id="boten_sideImg" />
        </div>
    </div>
</div>
<div id="BootTypes" class="Subject">
    <div class="page-header">
        <h1 style="text-align: center">Soorten boten</h1>
    </div>
    <div class="row">
        <div class="col-md-4 BootType">
            <h2>Schouwen</h2>
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot1.png" width="100%" alt="Schouwen" class="Thumb">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                pede justo,<br /><a href="#schouw" onclick="ChangeContent('Schouw')">Lees meer</a>
            </p>
            <div class="spacer" style="clear: both;"></div>
        </div>
        <div class="col-md-4 BootType">
            <h2>Draken</h2>
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot2.jpg" width="100%" alt="Falk" class="Thumb">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                pede justo,<br /><a href="#draken" onclick="ChangeContent('Draken')">Lees meer</a>
            </p>
            <div class="spacer" style="clear: both;"></div>
        </div>
        <div class="col-md-4 BootType">
            <h2>BM'ers</h2>
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot3.jpg" width="100%" alt="bm'er" class="Thumb">
            <p>
                Lorem ipsum dolor sit amet, consectetuer adipiscing elit. Aenean commodo
                ligula eget dolor. Aenean massa. Cum sociis natoque penatibus et magnis
                dis parturient montes, nascetur ridiculus mus. Donec quam felis, ultricies
                nec, pellentesque eu, pretium quis, sem. Nulla consequat massa quis enim.
                pede justo,<br /><a href="#BM" onclick="ChangeContent('bm')">Lees meer</a>
            </p>
            <div class="spacer" style="clear: both;"></div>
        </div>
    </div>
</div>
<div id="Schouw" style="display: none" class="Subject">

    <div class="row" >
        <div class="col-md-7">
            <div class="page-header">
                <h1>Schouw</h1>
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
            <a href="#soorten"  onclick="ChangeContent('BootTypes')"><i class="fa fa-arrow-left"></i> Ga terug</a>
        </div>
        <div class="col-md-5">
            <br /><br /><br />
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot1.png" id="boten_sideImg" />
        </div>
    </div>
</div>
<div id="Draken" style="display: none" class="Subject">

    <div class="row" >
        <div class="col-md-7">
            <div class="page-header">
                <h1>Draak</h1>
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
            <a href="#soorten"  onclick="ChangeContent('BootTypes')"><i class="fa fa-arrow-left"></i> Ga terug</a>
        </div>
        <div class="col-md-5">
            <br /><br /><br />
            <img src="/zeilschooldewaai/app/templates/default/img/boten/draak.jpg" id="boten_sideImg" alt="Draak" />
        </div>
    </div>
</div>

<div id="bm" style="display: none" class="Subject">

    <div class="row" >
        <div class="col-md-7">
            <div class="page-header">
                <h1>BM'ers</h1>
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
            <a href="#soorten"  onclick="ChangeContent('BootTypes')"><i class="fa fa-arrow-left"></i> Ga terug</a>
        </div>
        <div class="col-md-5">
            <br /><br /><br />
            <img src="/zeilschooldewaai/app/templates/default/img/boten/boot3.jpg" id="boten_sideImg" alt="BM'er" />
        </div>
    </div>
</div>