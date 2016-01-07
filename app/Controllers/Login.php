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

        $data = $this->login->pushUsers();
        

        View::renderTemplate('header', $data);
        View::render('user/login', $data);
        View::renderTemplate('footer', $data);
    }
}