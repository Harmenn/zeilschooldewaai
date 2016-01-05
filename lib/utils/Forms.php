<?php
namespace Lib\Utils;

class Forms {

    public static function getFormEntityValues($entity) {
        $output = [];
        foreach($entity as $key => $value) {
            if(!empty($_POST["data".ucfirst($key)])) {
                $output[$key] = $_POST["data".ucfirst($key)];
            } else {
                $output[$key] = $entity[$key];
            }
        }
        return $output;
    }

}