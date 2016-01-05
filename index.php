<?php
use Lib\Core\Loader;
use Lib\Core\Router;
use Lib\Core\View;
use Lib\Language;
use Lib\Utils\Session;

error_reporting(E_ALL);

try {

    require "lib/core/Loader.php";
    Loader::enable();

    Session::init();

    new \App\Config();

    Language::load();
    Router::dispatch();

} catch(Exception $e) {
    echo "Ernstige fout opgetreden. De website kan niet worden ingeladen. Het foutbericht omtrent: <strong>".$e->getMessage()."</strong>";
    exit;
}

View::display();