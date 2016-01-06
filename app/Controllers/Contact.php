<?php

namespace Controllers;

use Core\View;
use Core\Controller;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Contact extends Controller
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
        $data['title'] = "Contact";

        View::renderTemplate('header', $data);
        View::render('contact/index', $data);
        View::renderTemplate('footer', $data);
    }
}
