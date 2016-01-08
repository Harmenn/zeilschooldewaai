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
class Profiel extends Controller
{

    /**
     * Call the parent construct
     */

    public function __construct()
    {
        parent::__construct();
        //$this->registreren = new \Models\Db();
    }

    public function index()
    {
        $data['title'] = $this->language->get('Profiel');
        $data['home_message'] = $this->language->get('home_message');
        
        
        View::renderTemplate('header', $data);
        View::render('user/profiel', $data);
        View::renderTemplate('footer', $data);
    }
}
