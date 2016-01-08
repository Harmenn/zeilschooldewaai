<?php

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
    private $profiel;
    public function __construct()
    {
        parent::__construct();
        $this->profiel = new \Models\Db();
    }

    public function index()
    {

        $data['title'] = "Profiel";
        $id = \Helpers\Session::get('id');
        $data['klant'] = $this->profiel->getUser($id);
          
        View::renderTemplate('header', $data);
        View::render('user/profiel', $data);
        View::renderTemplate('footer', $data);
    }
}