<?php
/**
 * Sample layout
 */

use Helpers\Assets;
use Helpers\Url;
use Helpers\Hooks;

//initialise hooks
$hooks = Hooks::get();
?>
<html>
    <head>

    </head>
    <body>
        <div class="page-header">
            <h1>Registreren</h1>
        </div>

        <form action="submit" method="post">
            <div class="row">
                <div class="col-xs-2">
                    <p>Voornaam<br /><input class="form-control" type='text' name='username'></p> 
                </div>
                <div class="col-xs-2">
                    Voorletters<br /><input class="form-control" type='text' name='username'>
                </div>

                <div class="col-xs-2">
                    <p>Tussenvoegsel<br /><input class="form-control" type='text' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>Achternaam<br /><input class="form-control" type='text' name='username'></p>
                </div>
                <div class="col-xs-2">
                <p>Geslacht
                    <br />
                    <form>
                        <select id="Geslacht" name="Geslacht">
                            <option value="Man">Man</option>
                            <option value="Vrouw">Vrouw</option>
                        </select>
                    </form>
                </p>
                </div>
            </div> 
            <div class="row">
                <div class="col-xs-2">
                    <p>Adres<br /><input class="form-control" type='text' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>Postcode<br /><input class="form-control" type='text' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>Woonplaats<br /><input class="form-control" type='text' name='username'></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <p>Telefoonnummer<br /><input class="form-control" type='phone' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>Mobiel<br /><input class="form-control" type='text' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>E-mail<br /><input class="form-control" type='email' name='username'></p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <p>Geboorte datum<br /><input class="form-control" type='date' name='username'></p>
                </div>
                <div class="col-xs-2">
                    <p>Niveau
                        <form>
                            <select id="Niveau" name="Niveau">
                                <option value="Beginner">Beginner</option>
                                <option value="Gevorderd">Gevorderd</option>
                            </select>
                        </form>
                    </p>
                </div>
            </div>
            <div class="row">
                <div class="col-xs-2">
                    <p>Password<br /><input class="form-control" type='password' name='password'></p>
                </div>
                <div class="col-xs-2">
                    <p>Re-Password<br /><input class="form-control" type='password' name='password'></p>
                </div>
                </div> 
                    <p><input class="btn btn-info" type='submit' name='submit' value='Registreren'></p>
            
        </form>
         
    </body>
</html>