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
        echo "done";
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
        
        $voorletters = $_POST['voorletters'];
        $geslacht = $_POST['geslacht'];
        $voornaam = $_POST['voornaam'];
        $tussenvoegsel = $_POST['tussenvoegsel'];
        $achternaam = $_POST['achternaam'];
        $adres = $_POST['adres'];
        $postcode = $_POST['postcode'];
        $woonplaats = $_POST['woonplaats'];
        $telefoonnummer = $_POST['tel'];
        $mobiel = $_POST['mobiel'];
        $email = $_POST['email'];
        $geboortedatum = $_POST['date'];
        $niveau = $_POST['niveau'];
        $wachtwoord = sha1($_POST["password"]);
        $url = "leeg";
        
        //$this->registreren->insertUsers($voorletters, $geslacht, $voornaam, $tussenvoegsels, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $geboortedatum, $niveau, $wachtwoord, $url, 0);
        if ($_POST) {
            $this->sendValidateMail($email);
        }        

        View::renderTemplate('header', $data);
        View::render('user/registreren', $data);
        View::renderTemplate('footer', $data);
    }
}
