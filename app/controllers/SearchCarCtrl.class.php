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
    private $records;

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
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }

        if ($this->form->price_sort == "rosnaco") {
            $price = "ASC";
        } else {
            $price = "DESC";
        }

        $where ["ORDER"] = ["cena_doba" => $price];
        
        try {
            $this->records = App::getDB()->select("samochod", 
            ["[>]placowka" => ["placowka_id_placowki" => "id_placowki"]],
            ["id_pojazdu","marka","model","miasto","rok_prod",
            "poj_silnika","rodz_paliwa","czy_wypoz", "cena_doba",
            "liczba_miejsc","skrzynia","img"
            ], $where);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych');

            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();

        
    }

    public function action_AddCar() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddCarView.tpl");
    }

    public function generateView() {

        App::getSmarty()->assign('records',$this->records);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchCarView.tpl");

    }

    
}