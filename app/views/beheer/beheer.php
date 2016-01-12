<?php
/**
 * Sample layout
 */

use Core\Language;
if (\Helpers\Session::get('rechten')==3) 
{
	?>
    <div class="page-header">
        <h1 style="text-align: center">Beheer</h1>
    </div>
        <table class="table table-hover">
            <button id="toevoegen" class="btn btn-primary">toevoegen</button>
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>E-mail</th>    
                    <th></th>
                </tr>
            </thead>
            <tbody>
 <?php
                    echo $data["users"];
                        
                    ?>

                </tbody>
        </table>
    <?php
}
elseif(\Helpers\Session::get('rechten')==2)
{
	echo "<table class='table table-hover'><thead></thead>".$data["users"]."</table>";
?>
	

<br />

<!-- Nav tabs -->
    <ul class="nav nav-tabs" role="tablist">
        <li role="presentation" class="active"><a href="#BeheerProfiel" onclick="ChangeContent('BeheerProfiel')" role="tab" data-toggle="tab">Beheer Profiel</a></li>
        <li role="presentation"><a href="#BeheerKlanten" role="tab"  onclick="ChangeContent('BeheerKlanten')" data-toggle="tab">Beheer Klanten</a></li>
        <li role="presentation"><a href="#BeheerBoten" role="tab"  onclick="ChangeContent('BeheerBoten')" data-toggle="tab">Beheer Boten</a></li>
        <li role="presentation"><a href="#BeheerCursussen" role="tab"  onclick="ChangeContent('BeheerCursussen')" data-toggle="tab">Beheer Cursussen</a></li>
        <li role="presentation"><a href="#BeheerInstructeurs" role="tab"  onclick="ChangeContent('BeheerInstructeurs')" data-toggle="tab">Beheer Instructeurs</a></li>
        <li role="presentation"><a href="#CursistKoppelen" role="tab"  onclick="ChangeContent('CursistKoppelen')" data-toggle="tab">Cursist Koppelen</a></li>
    </ul>



<?php }
else
{
	echo "geen rechten";
}

