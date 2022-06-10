<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\SearchCarForm;
use core\Validator;


class SearchCarCtrl {

    private $form;
    private $car_records;
    public $offset = 1;
    public $records = 5;
    private $where;
    private $price;

    public function __construct() {

        $this->form = new SearchCarForm();

    }

    public function getParams() {

        $this->form->mark_search = ParamUtils::getFromRequest('mark_search');
        $this->form->model_search = ParamUtils::getFromRequest('model_search');
        $this->form->rented_search = ParamUtils::getFromRequest('rented_search');
        $this->form->price_sort = ParamUtils::getFromRequest('price_sort');

        return !App::getMessages()->isError();
    }


    public function action_SearchCar() {

        $this->getParams();

        $search_params = []; 

        if (isset($this->form->mark_search) && strlen($this->form->mark_search) > 0) {
            $search_params['marka[~]'] = $this->form->mark_search . '%'; 
        }

        if (isset($this->form->model_search) && strlen($this->form->model_search) > 0) {
            $search_params['model[~]'] = $this->form->model_search . '%'; 
        }

        if (isset($this->form->rented_search)) {

            if ($this->form->rented_search !== "") {
                $search_params['czy_wypoz[~]'] = $this->form->rented_search; 
            }
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

        $this->where ["ORDER"] = ["cena_doba" => $this->price];

        //stronicowanie
        $offset = ParamUtils::getFromCleanURL(1); 
        
        if(isset($offset) && is_numeric($offset) && $offset > 0) {
            $this->offset += $offset - 1;
        }

        if(isset($offset) && $offset == 0) {
            try {

                $this->records = App::getDB() -> count("samochod");
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

        $this->result();
        $this->generateView();
        
          
    }

    public function result() {

    if (!strlen($this->form->mark_search) > 0 && !strlen($this->form->model_search) > 0 
    && !strlen($this->form->rented_search) > 0) {

        try {
            $this->car_records = App::getDB()->select("samochod", 
            ["[>]placowka" => ["placowka_id_placowki" => "id_placowki"]],
            ["id_pojazdu","marka","model","miasto","rok_prod",
            "poj_silnika","rodz_paliwa","czy_wypoz", "cena_doba",
            "liczba_miejsc","skrzynia","img"
            ], ["LIMIT" => [(($this->offset - 1) * $this->records), $this->records]]);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych');

            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    } else {

        try {
            $this->car_records = App::getDB()->select("samochod", 
            ["[>]placowka" => ["placowka_id_placowki" => "id_placowki"]],
            ["id_pojazdu","marka","model","miasto","rok_prod",
            "poj_silnika","rodz_paliwa","czy_wypoz", "cena_doba",
            "liczba_miejsc","skrzynia","img"
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
            $isNext = App::getDB()->has("samochod",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
   
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function action_AddCar() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddCarView.tpl");
    }

    public function generateView() {

        App::getSmarty()->assign('car_records',$this->car_records);
        App::getSmarty()->assign('offset', $this->offset);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("isNextPage", $this->isNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchCarView.tpl");

    }

    
}