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
    <div class="page-header">
        <h1>Registreren</h1>
    </div>
    <form action="" method="post">
        <div class="row">
            <div class="col-md-7">
                <div class="col-md-12">
                    <p>Voornaam<br /><input class="form-control" type='text' name='voornaam' required></p>
                </div>
                <div class="col-md-3">
                    Voorletters<br /><input class="form-control" type='text' name='voorletters' required>
                </div>
                <div class="col-md-3">
                    <p>Tussenvoegsel<br /><input class="form-control" type='text' name='tussenvoegsel'></p>
                </div>
                <div class="col-md-6">
                    <p>Achternaam<br /><input class="form-control" type='text' name='achternaam' required></p>
                </div>
                <div class="col-md-5">
                    <p>Adres<br /><input class="form-control" type='text' name='adres' required></p>
                </div>
                <div class="col-md-2">
                    <p>Postcode<br /><input class="form-control" type='text' name='postcode' required></p>
                </div>
                <div class="col-md-5">
                    <p>Woonplaats<br /><input class="form-control" type='text' name='woonplaats' required></p>
                </div>
                <div class="col-md-6">
                    <p>Telefoonnummer<br /><input class="form-control" type='tel' name='tel'></p>
                </div>
                <div class="col-md-6">
                    <p>Mobiel<br /><input class="form-control" type='text' name='mobiel'></p>
                </div>
                <div class="col-md-12">
                    <p>E-mail<br /><input class="form-control" type='email' name='email' required></p>
                </div>
                <div class="col-md-4">
                    <p>Geboorte datum<br /><input class="form-control" type='date' name='date' required></p>
                </div>
                <div class="col-md-8">
                    <p>Geslacht
                        <br />
                        <select id="geslacht" name="geslacht" class="form-control">
                            <option value="Man">Man</option>
                            <option value="Vrouw">Vrouw</option>
                        </select>
                    </p>
                </div>
                <div class="col-md-12">
                    <p>Niveau
                        <br />
                        <select id="niveau" name="niveau"  class="form-control">
                            <option value="Beginner">Beginner</option>
                            <option value="Gevorderd">Gevorderd</option>
                        </select>
                    </p>
                </div>
                <div class="col-md-6">
                    <p>Password<br /><input class="form-control" type='password' name='password' required></p>
                </div>
                <div class="col-md-6">
                    <p>Re-Password<br /><input class="form-control" type='password' name='password' required></p>
                </div>
                <div class="col-md-12">
                    <label for="message">Captcha <small>(Tegen bots)</small>:</label>
                    <div class="g-recaptcha" id="captcha" name="form_captcha" data-sitekey="6LdEohQTAAAAAJTVjYk_L35j7aQ_ctXuv0qCPEzj"></div>
                </div>
                <div class="col-md-12">
                    <br />
                    <button class="btn btn-primary" type="submit">Registreren</button>
                </div>
            </div>
            <div class="col-md-5">
                <img src="/zeilschooldewaai/app/templates/default/img/register.jpg" width="100%" style="border-radius: 4px;" id="registerimg"/>
            </div>
        </div>
    </form>