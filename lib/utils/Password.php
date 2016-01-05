<?php
namespace Lib\Utils;

if (!defined('PASSWORD_BCRYPT')) {
    define('PASSWORD_BCRYPT', 1);
    define('PASSWORD_DEFAULT', PASSWORD_BCRYPT);
}

class Password {

    public static function make($password, array $options = array()) {
        return password_hash($password, PASSWORD_BCRYPT, $options);
    }

    public static function getInfos($hash) {
        return password_get_info($hash);
    }

    public static function verify($password, $hash) {
        return password_verify($password, $hash);
    }

}