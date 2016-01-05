<?php
namespace Lib\Core;

use Lib\Language;

class View {

    private static $template;
    private static $buffer = "";
    private static $errors = array();

    public static function template($template, $data = false) {
        ob_start();
        $data["errors"] = self::$errors;
        $lang = Language::getArray();
        $file = "app/views/templates/$template.phtml";
        if(file_exists($file)) {
            require $file;
        } else { throw new \Exception("Unknown template file: $file"); }
        $output = ob_get_clean();
        self::$template = $output;
    }

    public static function render($path, $data = false) {
        self::$buffer .= self::processView($path, $data);
    }

    public static function processView($path, $data = false) {
        $data["errors"] = self::$errors;
        $lang = Language::getArray();
        $file = "app/views/$path.phtml";
        ob_start();
        if(file_exists($file)) {
            require $file;
        } else { throw new \Exception("Unknown view file: $file"); }
        $output = ob_get_clean();
        return self::processContents($output, $data);
    }

    private static function processContents($content, $data = false) {
        $data["errors"] = self::$errors;
        preg_match_all("({RenderView: ([0-9\/A-Za-z_-]+)})", $content, $search);
        foreach($search[0] as $key => $value) {
            $path = $search[1][$key];
            $replacement = self::processView($path, $data);
            $content = str_replace($value, $replacement, $content);
        }
        return $content;
    }

    public static function error($e) {
        array_push(self::$errors, $e);
    }

    public static function display() {
        if(isset(self::$template)) {
            $output = str_replace("{RenderBody}", self::$buffer, self::$template);
            $output = self::processContents($output);
            echo $output;
        } else {
            echo self::$buffer;
        }
    }

}