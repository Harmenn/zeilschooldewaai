<?php
namespace Lib\Core;

use Exception;
use PDO;

class Database extends PDO {

    private static $instances = array();

    public static function get($group = false) {

        $group = !$group ? array (
            'host' => DB_HOST,
            'name' => DB_NAME,
            'user' => DB_USER,
            'pass' => DB_PASS
        ) : $group;

        $connString = "mysql:host=".$group['host'].";dbname=".$group['name'].";charset=utf8";
        $id = $connString.$group['user'].$group['pass'];

        if(isset(self::$instances[$id])) {
            return self::$instances[$id];
        }

        try {
            $db = new Database($connString, $group['user'], $group['pass']);
            self::$instances[$id] = $db;
            return $db;
        } catch(\PDOException $e) {
            throw new Exception("Could not connect to the database.");
        }

    }

}