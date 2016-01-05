<?php
namespace Lib\Utils;

class Validate {

    public static function simple($args) {
        if(!is_array($args)) return empty($_POST[$args]);
        foreach($args as $key) {
            if(empty($_POST[$key])) return false;
        }
        return true;
    }

    public static function email($args) {
        if(!is_array($args)) return filter_var($_POST[$args], FILTER_VALIDATE_EMAIL);
        foreach($args as $key) {
            if(!filter_var($_POST[$key], FILTER_VALIDATE_EMAIL)) return false;
        }
        return true;
    }

    public static function explicit($arg, $values) {
        if(empty($_POST[$arg])) return false;
        foreach($values as $value) {
            if($_POST[$arg] == $value) return true;
        }
        return false;
    }

}