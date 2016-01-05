<?php
namespace Lib\Core;

class Loader {

    public static function enable() {
        spl_autoload_register('Lib\Core\Loader::load');
    }

    public static function load($className) {
        $parts = explode('\\', $className);
        for($i=0;$i<count($parts)-1;$i++) {
            $parts[$i] = strtolower($parts[$i]);
        }
        $filePath = implode('/', $parts) . '.php';

        if (file_exists($filePath)) {
            require $filePath;
        } else {
            throw new \Exception('File not found: ' . $filePath);
        }

    }
}