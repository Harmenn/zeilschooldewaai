<?php
namespace App;

use Lib\Core\Router;

class Config {

    public function __construct() {

        define('DIR', '/mvc/');

        define('DEFAULT_CONTROLLER', 'home');
        define('DEFAULT_METHOD', 'index');

        define('DEFAULT_LANGUAGE', 'en');

        define('DB_HOST', 'localhost');
        define('DB_NAME', 'db');
        define('DB_USER', 'root');
        define('DB_PASS', '');

        define('SESSION_PREFIX', 'DE8UUCrYpbhfyBD');


        //Router::

    }

}