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
    private $rent_records;
    public $offset = 1;
    public $records = 5;
    private $where;
    private $price;

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
            $this->where = ["AND" => &$search_params];
        } else {
            $this->where = &$search_params;
        }
        
        if ($this->form->price_sort == "rosnaco") {
            $this->price = "ASC";
        } else {
            $this->price = "DESC";
        }

        $this->where ["ORDER"] = ["wart_wyp" => $this->price];

        //stronicowanie
        $offset = ParamUtils::getFromCleanURL(1); 
        
        if(isset($offset) && is_numeric($offset) && $offset > 0) {
            $this->offset += $offset - 1;
        }

        if(isset($offset) && $offset == 0) {
            try {

                $this->records = App::getDB() -> count("wypozyczenie");
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

        $this->result();
        $this->generateView();
        
    }

        public function result() {

        if (!strlen($this->form->surname_search) > 0 && !strlen($this->form->mark_search) > 0 
        && !strlen($this->form->model_search) > 0) {

            try {
                $this->rent_records = App::getDB()->select("wypozyczenie", 
                ["[>]osoba" => ["osoba_id_osoby" => "id_osoby"],
                "[>]platnosc" => ["platnosc_id_platnosci" => "id_platnosci"],
                "[>]samochod" => ["samochod_id_pojazdu" => "id_pojazdu"],
                "[>]placowka" => ["placowka_id_placowki" => "id_placowki"]
                ],
                ["id_wypozyczenia","marka","model","imie","nazwisko","wart_wyp","data_wyp","data_zw","miasto"
            ],["LIMIT" => [(($this->offset - 1) * $this->records), $this->records]]);
    
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych');
    
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }

        } else {

            try {
                $this->rent_records = App::getDB()->select("wypozyczenie", 
                ["[>]osoba" => ["osoba_id_osoby" => "id_osoby"],
                "[>]platnosc" => ["platnosc_id_platnosci" => "id_platnosci"],
                "[>]samochod" => ["samochod_id_pojazdu" => "id_pojazdu"],
                "[>]placowka" => ["placowka_id_placowki" => "id_placowki"]
                ],
                ["id_wypozyczenia","marka","model","imie","nazwisko","wart_wyp","data_wyp","data_zw","miasto"
                ], $this->where);
    
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych');
    
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }
        }
   
    }

    public function isNextPage() {

        try{
            $isNext = App::getDB()->has("wypozyczenie",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
   
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function generateView() {

        App::getSmarty()->assign('rent_records',$this->rent_records);
        App::getSmarty()->assign('offset', $this->offset);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("isNextPage", $this->isNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchRentView.tpl");

    }

    

    


}