<?php
/**
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */

namespace Controllers;

use Core\View;
use Core\Controller;
use Core\Config;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Registreren extends Controller
{

    /**
     * Call the parent construct
     */
    private $registreren;
    public function __construct()
    {
        parent::__construct();
        $this->registreren = new \Models\Db();
    }

    public function sendValidateMail($email)
    {

        $url = md5($email);

        $mail = new \Helpers\PhpMailer\Mail();
        $mail->addAddress($email);
        $mail->subject('Zeilschool de waai validatie');
        $mail->body("Hallo, door op deze <a href='http://ruudlouwerse.nl/zeilschooldewaai/registreren/".$url."'>Link</a> te klikken activeert u uw account ");
        $mail->Send();
        return $url;
    }

    public function post($slug)
    {
        $check = $this->registreren->validateUser($slug);
        if(count($check) == 1){
            $this->registreren->givePrivilage($check[0]->klant_id);
        }

        \Helpers\Url::redirect('activatie');
    }

    public function activatie()
    {
        View::renderTemplate('header', $data);
        View::render('user/activatie', $data);
        View::renderTemplate('footer', $data);
    }

    public function index()
    {
        $data['title'] = $this->language->get('Registreren');
        $data['home_message'] = $this->language->get('home_message');
        
        $geslacht = $_POST['geslacht'];
        $voorletters = $_POST['voorletters'];
        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $woonplaats = $_POST['woonplaats'];
        $telefoonnummer = $_POST['tel'];
        $mobiel = $_POST['mobiel'];
        $email = $_POST['email'];       
        $niveau = $_POST['niveau'];
        $geboortedatum = $_POST['date'];
        $wachtwoord = $_POST["password"];
        $wachtwoord1 = $_POST["password1"];
        $form_captcha = $_POST['g-recaptcha-response'];

            if ($_POST)
            {   
                if($form_captcha == 0)
                {
                    $data["melding"] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Er is een fout opgetreden.</strong><br>De captcha is niet ingevuld.</div>';
                }
                else if(!empty($_POST['geslacht']) && !empty($_POST['voorletters']) && !empty($_POST['voornaam']) && !empty($_POST['achternaam']) && !empty($_POST['adres']) && !empty($_POST['postcode']) && !empty($_POST['woonplaats']) && !empty($_POST['email']) && !empty($_POST['niveau']) && !empty($_POST['date']) && !empty($_POST['password']))
                {
                    if($wachtwoord == $wachtwoord1)
                    {
                        $wachtwoord = sha1($_POST["password"]);
                        $url = $this->sendValidateMail($email);
                        $this->registreren->insertUsers($geslacht,$voorletters, $voornaam, $tussenvoegsel, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $niveau, $geboortedatum, $wachtwoord, $url);

                        \Helpers\Url::redirect('login');
                    }
                    else
                    {
                        $data["melding"] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Er is een fout opgetreden.</strong><br>De wachtwoorden zijn niet hetzelfde.</div>';
                    }
                }
                else
                {
                    $data["melding"] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Er is een fout opgetreden.</strong><br>De captcha of alle velden zijn niet allemaal ingevuld.</div>';
                }
            }
        
        View::renderTemplate('header', $data);
        View::render('user/registreren', $data);
        View::renderTemplate('footer', $data);
        
    }
    
}
