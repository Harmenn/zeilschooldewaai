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
                    <p>Voornaam<br /><input class="form-control" type='text' name='voornaam' required></p> 
                </div>
                
                <div class="col-xs-2">
                    Voorletters<br /><input class="form-control" type='text' name='voorletters' required>
                </div>

                <div class="col-xs-2">
                    <p>Tussenvoegsel<br /><input class="form-control" type='text' name='t/v'></p>
                </div>
                
                <div class="col-xs-2">
                    <p>Achternaam<br /><input class="form-control" type='text' name='achternaam' required></p>
                </div>
                <div class="col-xs-2">
                    <p>Geslacht
                        <br />                       
                            <select id="Geslacht" name="Geslacht">
                                <option value="Man">Man</option>
                                <option value="Vrouw">Vrouw</option>
                            </select>                       
                    </p>
                </div>

            
            </div> 
        
            <div class="row">
                
                <div class="col-xs-2">
                    <p>Adres<br /><input class="form-control" type='text' name='adres' required></p>
                </div>
                
                <div class="col-xs-2">
                    <p>Postcode<br /><input class="form-control" type='text' name='postcode' required></p>
                </div>
                
                <div class="col-xs-2">
                    <p>Woonplaats<br /><input class="form-control" type='text' name='Woonplaats' required></p>
                </div>
                
            </div>
        
            <div class="row">
                
                <div class="col-xs-2">
                    <p>Telefoonnummer<br /><input class="form-control" type='tel' name='tel'></p>
                </div>
                
                <div class="col-xs-2">
                    <p>Mobiel<br /><input class="form-control" type='text' name='mobiel'></p>
                </div>
                
                <div class="col-xs-2">
                    <p>E-mail<br /><input class="form-control" type='email' name='email' required></p>
                </div>
                
            </div>
        
            <div class="row">
                
                <div class="col-xs-2">
                    <p>Geboorte datum<br /><input class="form-control" type='date' name='date' required></p>
                </div>
                <div class="col-xs-2">
                    <p>Niveau
                        <br />                        
                            <select id="Niveau" name="Niveau">
                                <option value="Beginner">Beginner</option>
                                <option value="Gevorderd">Gevorderd</option>
                            </select>                        
                    </p>
                </div>


            </div>
    
            <div class="row">
                
                <div class="col-xs-2">
                    <p>Password<br /><input class="form-control" type='password' name='password' required></p>
                </div>
                
                <div class="col-xs-2">
                    <p>Re-Password<br /><input class="form-control" type='password' name='password' required></p>
                </div>
                
            </div> 
    
            <div class="form-group">
                <label for="message">Captcha <small>(Tegen bots)</small>:</label>
				    <div class="g-recaptcha" id="captcha" name="form_captcha" data-sitekey="6LdEohQTAAAAAJTVjYk_L35j7aQ_ctXuv0qCPEzj">                       </div>
            </div>
            <button class="btn btn-info" type="submit">Registreren</button>
        </form>

                
  
    </body>
</html>

