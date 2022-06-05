<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\SearchRentForm;
use core\Validator;


class SearchRentCtrl {

    private $form;
    private $records;

    public function __construct() {

        $this->form = new SearchRentForm();

    }

    public function getParams() {

        $this->form->surname_search = ParamUtils::getFromRequest('surname_search');
        $this->form->mark_search = ParamUtils::getFromRequest('mark_search');
        $this->form->model_search = ParamUtils::getFromRequest('model_search');
        $this->form->price_sort = ParamUtils::getFromRequest('price_sort');


        return !App::getMessages()->isError();
    }


    public function action_SearchRent() {

        $this->getParams();


        $search_params = []; 

        if (isset($this->form->surname_search) && strlen($this->form->surname_search) > 0) {
            $search_params['nazwisko[~]'] = $this->form->surname_search . '%'; 
        }

        if (isset($this->form->mark_search) && strlen($this->form->mark_search) > 0) {
            $search_params['marka[~]'] = $this->form->mark_search . '%'; 
        }

        if (isset($this->form->model_search) && strlen($this->form->model_search) > 0) {
            $search_params['model[~]'] = $this->form->model_search . '%'; 
        }

        $num_params = sizeof($search_params);

        if ($num_params > 1) {
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        if ($this->form->price_sort == "rosnaco") {
            $price = "ASC";
        } else {
            $price = "DESC";
        }

        $where ["ORDER"] = ["wart_wyp" => $price];

        try {
            $this->records = App::getDB()->select("wypozyczenie", 
            ["[>]osoba" => ["osoba_id_osoby" => "id_osoby"],
            "[>]platnosc" => ["platnosc_id_platnosci" => "id_platnosci"],
            "[>]samochod" => ["samochod_id_pojazdu" => "id_pojazdu"],
            "[>]placowka" => ["placowka_id_placowki" => "id_placowki"]
            ],
            ["id_wypozyczenia","marka","model","imie","nazwisko","wart_wyp","data_wyp","data_zw","miasto"
            ], $where);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych');

            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();

        
    }

    public function generateView() {

        App::getSmarty()->assign('records',$this->records);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchRentView.tpl");

    }

    

    


}