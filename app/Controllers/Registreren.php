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
        $wachtwoord = sha1($_POST["password"]);
        $url = "leeg";
        
        $this->registreren->insertUsers($voorletters, $geslacht, $voornaam, $tussenvoegsels, $achternaam, $adres, $postcode, $woonplaats, $telefoonnummer, $mobiel, $email, $geboortedatum, $niveau, $wachtwoord, $url);
        
        View::renderTemplate('header', $data);
        View::render('user/registreren', $data);
        View::renderTemplate('footer', $data);
    }
}
