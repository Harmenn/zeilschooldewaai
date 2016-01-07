<?php
/**
 * Cursussen Sectie controller
 */

namespace Controllers;

use Core\View;
use Core\Controller;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Cursussen extends Controller
{

    /**
     * Call the parent construct
     */
    public function __construct()
    {
        parent::__construct();
        $this->language->load('Home');
    }

    public function index()
    {
        $data['title'] = $this->language->get('Cursussen');
        $data['home_message'] = $this->language->get('no message');

        View::renderTemplate('header', $data);
        View::render('cursussen/overzicht', $data);
        View::renderTemplate('footer', $data);
    }
}
