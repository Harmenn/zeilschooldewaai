<?php

namespace Controllers;

use Core\View;
use Core\Controller;

class Contact extends Controller
{
    public function __construct()
    {
        parent::__construct();
    }

    public function index()
    {
        $data['title'] = "Contact";

        View::renderTemplate('header', $data);
        View::render('contact/index', $data);
        View::renderTemplate('footer', $data);
    }
}
