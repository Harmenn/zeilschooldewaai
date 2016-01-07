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
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $database = $this->db->select();
        $data['title'] = "Login";

        View::renderTemplate('header', $data);
        View::render('user/login', $data);
        View::renderTemplate('footer', $data);
    }
}