<?php
namespace Lib\Utils;

use App\Models\UserModel;

class Auth {

    private static $loggedinUser = null;

    public static function isLoggedin() {
        $userId = Session::get("userid");
        $password = Session::get("password");
        $m = new UserModel();
        $user = $m->getUserById($userId);
        if($user != false) {
            if(Password::verify($password, $user["password"])) {
                return true;
            } else {
                Session::pull("userid");
                Session::pull("password");
                return false;
            }
        } else {
            return false;
        }
    }

    public static function hasRole($perm) {
        if(!self::isLoggedin()) return false;
        $user = self::getLoggedinUser();
        return $user["role"] >= $perm;
    }

    public static function getLoggedinUser() {
        if(self::$loggedinUser != null) return self::$loggedinUser;
        $m = new UserModel();
        $user = $m->getUserById(Session::get("userid"));
        self::$loggedinUser = $user;
        return $user;
    }

    public static function checkAndRedirect() {
        if(!Auth::isLoggedin()) {
            Url::redirect("account/login");
            return false;
        }
        return true;
    }

}