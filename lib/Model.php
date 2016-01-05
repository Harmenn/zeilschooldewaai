<?php
namespace Lib;

use Lib\Core\Database;

abstract class Model {

    protected $db;

    public function __construct() {
        $this->db = Database::get();
    }

}