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
        $this->dbBeheer = new \Models\Db();
    }

    public function getData($tabel, $rechten)
    {
        $result = $this->dbBeheer->userData($tabel);

        foreach ($result as $key => $value){
            if ($value->priviledged == $rechten) {
                
            }else
            {
                unset($result[$key]);
            }
        }

        return $result;

    }

    public function insertData($tabel, $values)
    {
        $result = $this->dbBeheer->insertData($tabel, $values);
    }

    public function updateData($tabel, $values)
    {
        $result = $this->dbBeheer->updateData($tabel, $values);
    }

    public function deleteData($tabel, $where)
    {
        $result = $this->dbBeheer->updateData($tabel, $where);
    }

    public function beheer()
    {

        $data['title'] = $this->language->get('Beheer');
        $rechten = \Helpers\Session::get('rechten') - 1;
        $result = $this->getData('klanten', $rechten);
        $data["users"] = '<table class="table table-hover">
            <button id="toevoegen" class="btn btn-primary">toevoegen</button>
            <thead>
                <tr>
                    <th>Voornaam</th>
                    <th>Tussenvoegsel</th>
                    <th>Achternaam</th>
                    <th>E-mail</th>    
                    <th></th>
                </tr>
            </thead>
            <tbody>';
        foreach ($result as $key) {
            $data["users"] .= "<tr><td>".$key->voornaam."</td><td>".$key->tussenvoegsel."</td><td>".$key->achternaam."</td><td>".$key->email."</td><td><button name='wijzigen' id='".$key->klant_id."' class='fa fa-pencil-square-o btn btn-link' type='submit'></button><button name='verwijderen' id='".$key->klant_id."' class='fa fa-times btn btn-link'></button></td></tr>";
        }
        $data["users"] .= '</tbody>
        </table>';

        View::renderTemplate('header', $data);
        View::render('beheer/beheer', $data);
        View::renderTemplate('footer', $data);
    }
    
}
