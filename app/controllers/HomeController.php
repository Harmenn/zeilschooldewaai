<?php
namespace App\Controllers;

use Lib\Controller;
use Lib\Core\View;

class HomeController extends Controller {

    public function index() {
        View::template("default");
        View::render("home/index");
    }

}