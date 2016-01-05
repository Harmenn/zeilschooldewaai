<?php
namespace Lib\Utils;

use Lib\Core\Router;

class HTML {

    public static function link($text, $controller, $method=false, $icon=false) {
        $route = Router::getCurrentRoute();
        $controller = ucfirst($controller)."Controller";
        $active = $route["controller"] == $controller && ($method!=false?$route["method"]==$method:true);
        $output = '';
        $output .= '<li' . ($active ? ' class="active"' : '') . '>';
        $output .= '<a href="'.Router::getRoute($controller, $method!=false?$method:"index").'">'.($icon!=false?'<i class="fa fa-'.$icon.'"></i> ':'').$text.'</a>';
        $output .= '</li>';
        return $output;
    }

}