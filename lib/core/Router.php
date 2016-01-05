<?php
namespace Lib\Core;

use Exception;
use Lib\Language;

class Router {

    private static $routes = array();

    public static $patterns = array(
        ':any' => '[^/]+',
        ':num' => '-?[0-9]+',
        ':all' => '.*'
    );

    public static function get($url, $dest) {

        array_push(array("method" => "get", "url" => $url, "dest" => $dest), self::$routes);
    }

    public static function getCurrentRoute() {
        $uri = parse_url($_SERVER['QUERY_STRING'], PHP_URL_PATH);
        $uri = trim($uri, '/');
        $uri = ($amp = strpos($uri, '&')) !== false ? substr($uri, 0, $amp) : $uri;
        $parts = explode('/', $uri);

        $controller = array_shift($parts);
        $controller = $controller ? $controller : DEFAULT_CONTROLLER;
        $controller = ucwords($controller);

        $method = array_shift($parts);
        $method = $method ? $method : DEFAULT_METHOD;

        $params = !empty($parts) ? $parts : array();

        return array(
            'controller' => $controller."Controller",
            'method' => $method,
            'parameters' => $params
        );
    }

    public static function getRoute($controller, $method, $params = false) {
        $o = DIR.strtolower(explode("Controller", $controller)[0])."/".$method;
        if($params != false) {
            foreach($params as $param) $o .= "/".$param;
        }
        return $o;
    }

    public static function dispatch() {
        $found = self::dispatchDefaultRoute();

        if (!$found) {
            header("{$_SERVER['SERVER_PROTOCOL']} 404 Not Found");
            $data['error'] = Language::get("error_page_not_found");
            View::template("default");
            View::render("error/404", $data);
        }
    }

    public static function dispatchDefaultRoute() {

        $route = self::getCurrentRoute();
        $controller = $route["controller"];
        $method = $route["method"];
        $params = $route["parameters"];

        if (!file_exists("app/controllers/$controller.php")) {
            return false;
        }

        $controller = "\App\Controllers\\$controller";
        $c = new $controller;

        if (method_exists($c, $method)) {
            call_user_func_array(array($c, $method), $params);
            return true;
        }

        return false;
    }

}