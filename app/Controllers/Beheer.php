<?php

/**
 * Welcome controller
 *
 * @author David Carr - dave@daveismyname.com
 * @version 2.2
 * @date June 27, 2014
 * @date updated Sept 19, 2015
 */

namespace Controllers;

use Core\View;
use Core\Controller;
use Core\Config;

/**
 * Sample controller showing a construct and 2 methods and their typical usage.
 */
class Beheer extends Controller
{

    /**
     * Call the parent construct
     */
    private $dbBeheer;
    public function __construct()
    {
        parent::__construct();
        $this->beheer = new \Models\Db();
    }

    public function getData($tabel)
    {
        $result = $this->dbBeheer->userData($tabel);

        return $result;
    }

    public function insertData($tabel, $data)
    {
        $result = $this->dbBeheer->insertData($tabel);
    }

    public function updateData($tabel, $data)
    {
        $result = $this->dbBeheer->updateData($tabel);
    }

    public function deleteData($tabel, $data)
    {
        $result = $this->dbBeheer->updateData($tabel);
    }

    public function index()
    {
        
    }
    
}
