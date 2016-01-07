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
        $pass = $_POST["password"];
        $passw = $this->login->pushUsers($user);
        if (!empty($pass)) 
        {
            if (count($passw==1)) {
                if ($pass == $passw[0]->wachtwoord) 
                {
                    \Helpers\Session::set('username', $user);
                }
                else
                {
                    
                } 
            }
            
        }
        if (isset($_POST["logout"])) {
            \Helpers\Session::destroy('username');
        }
        View::renderTemplate('header', $data);
        View::render('user/login', $data);
        View::renderTemplate('footer', $data);
    }
}