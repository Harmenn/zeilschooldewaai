<?php
namespace Lib\Utils;

class Url {

    public static function redirect($url = null, $fullPath = false) {
        if ($fullPath == false) $url = DIR . $url;
        header('Location: '.$url);
        exit;
    }

}
