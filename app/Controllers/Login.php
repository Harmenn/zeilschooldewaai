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
            $passw = $this->login->pushUsers($user);
            if ($pass == $passw[0]->wachtwoord) 
            {
                \Helpers\Session::set('username', $user);
                \Helpers\Url::redirect('home');
            }
            else
            {
                $data["error"] = "1 of meerdere velden zijn onjuist ingevult.";
            } 
            
            
        }
        View::renderTemplate('header', $data);
        View::render('user/login', $data);
        View::renderTemplate('footer', $data);
    }
    public function loguit()
    {
        \Helpers\Session::destroy('username');
        \Helpers\Url::redirect('home');
    }
}