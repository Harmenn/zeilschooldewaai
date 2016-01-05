<?php
namespace Lib\Utils;

class Session {

    private static $sessionStarted = false;

    public static function init()
    {
        if (self::$sessionStarted == false) {
            session_start();
            self::$sessionStarted = true;
        }
    }

    public static function set($key, $value = false)
    {
        if (is_array($key) && $value === false) {
            foreach ($key as $name => $value) {
                $_SESSION[SESSION_PREFIX.$name] = $value;
            }
        } else {
            $_SESSION[SESSION_PREFIX.$key] = $value;
        }
    }

    public static function pull($key)
    {
        $value = $_SESSION[SESSION_PREFIX.$key];
        unset($_SESSION[SESSION_PREFIX.$key]);
        return $value;
    }

    public static function get($key, $secondkey = false)
    {
        if ($secondkey == true) {
            if (isset($_SESSION[SESSION_PREFIX.$key][$secondkey])) {
                return $_SESSION[SESSION_PREFIX.$key][$secondkey];
            }
        } else {
            if (isset($_SESSION[SESSION_PREFIX.$key])) {
                return $_SESSION[SESSION_PREFIX.$key];
            }
        }
        return false;
    }

    public static function id()
    {
        return session_id();
    }

    public static function regenerate()
    {
        session_regenerate_id(true);
        return session_id();
    }

    public static function display()
    {
        return $_SESSION;
    }

    public static function destroy($key = '')
    {
        if (self::$sessionStarted == true) {
            if (empty($key)) {
                session_unset();
                session_destroy();
            } else {
                unset($_SESSION[SESSION_PREFIX.$key]);
            }
        }
    }

    /**
     * display message
      * @return string return the message inside div
     * Wilmer van Heerde
     */
    public static function message($sessionName = 'success')
    {
        $msg = Session::pull($sessionName);
        if (!empty($msg)) {
            return "<div class='alert alert-success alert-dismissable'>
                    <button type='button' class='close' data-dismiss='alert' aria-hidden='true'>×</button>
                    <h4><i class='fa fa-check'></i> ".$msg."</h4>
                  </div>";
        }
    }
}
