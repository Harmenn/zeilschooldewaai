<?php

namespace Controllers;

use Core\View;
use Core\Controller;
use Core\Config;
/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Login extends Controller
{
    /**
     * Call the parent construct
     */
    private $login;
    public function __construct()
    {
        parent::__construct();
        $this->login = new \Models\Db();
    }

    public function index()
    {

        $data['title'] = "Login";

        $user = $_POST["username"];
        $pass = sha1($_POST["password"]);
        
        if (!empty($pass)) 
        {
            if ($_POST) 
            {
                $passw = $this->login->pushUsers($user);
                if ($pass == $passw[0]->wachtwoord) 
                {
                    if (!$passw[0]->priviledged == 0) 
                    {
                        \Helpers\Session::set('username', $user);
                        \Helpers\Session::set('id', $passw[0]->klant_id);
                        \Helpers\Session::set('rechten', $passw[0]->priviledged);
                        \Helpers\Url::redirect('home'); 
                    }
                    else
                    {
                        $data["error"] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Dit account wordt niet herkent.</strong><br>Uw account is nog niet geactiveerd, check uw mail.</div>';
                    }
                }
                else
                {
                    $data["error"] = '<div class="alert alert-danger alert-dismissible fade in" role="alert"> <button type="button" class="close" data-dismiss="alert" aria-label="Close"><span aria-hidden="true">×</span></button> <strong>Er is een fout opgetreden.</strong><br>Dit account wordt niet herkent.</div>';
                } 
            }
            
        }
        View::renderTemplate('header', $data);
        View::render('user/login', $data);
        View::renderTemplate('footer', $data);
    }
    public function loguit()
    {
        \Helpers\Session::destroy('username');
        \Helpers\Session::destroy('id');
        \Helpers\Url::redirect('home');
    }
}