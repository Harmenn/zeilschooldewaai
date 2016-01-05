<?php
namespace Lib;

class Language {

    private static $keys;

    public static function load() {
        $lang = self::getActiveLanguage();
        $file = "app/languages/".$lang.".php";
        if(file_exists($file)) {
            self::$keys = include($file);
        } else {
            throw new \Exception("Could not load language file ".$file);
        }
    }

    public static function getActiveLanguage() {
        if(!isset($_COOKIE[SESSION_PREFIX."language"])) return DEFAULT_LANGUAGE;
        return $_COOKIE[SESSION_PREFIX."language"];
    }

    public static function setActiveLanguage($val) {
        setcookie(SESSION_PREFIX."language", $val, time() + (86400 * 30), '/');
    }

    public static function getArray() {
        return self::$keys;
    }

    public static function get($key, $args = false) {
        $str = self::$keys[$key];
        if($args != false) {
            if(is_array($args)) {
                for($i=0;$i<count($args);$i++) {
                    $str = preg_replace("(\{".$i."\})", $args[$i], $str);
                }
                return $str;
            } else {
                return preg_replace("(\{0\})", $args, $str);
            }
        }
        return $str;
    }

}