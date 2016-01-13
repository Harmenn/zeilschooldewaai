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

        $result = $this->getData('klanten', 2);
        $i = 1;
        foreach ($result as $key) {
            $data["users"] .= '
                <tr>
                    <td>'.$i.'</td>
                    <td>'.$key->voornaam.'</td>
                    <td>'.$key->tussenvoegsel.'</td>
                    <td>'.$key->achternaam.'</td>
                    <td>'.$key->email.'</td>
                    <td style="text-align: right">
                        <a href="#" data-id="'.$key->klant_id.'" class="EditRow"><i class="fa fa-pencil-square-o fa-lg"></i></a>&nbsp;
                        <a href="#" data-id="'.$key->klant_id.'" class="DeleteRow"><i class="fa fa-times fa-lg"></i></a>
                    </td>
                </tr>
            ';
            $i++;
        }

        View::renderTemplate('header', $data);
        View::render('beheer/beheer', $data);
        View::renderTemplate('footer', $data);
    }
    
}
