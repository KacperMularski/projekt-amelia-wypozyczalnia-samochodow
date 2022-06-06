<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\SearchWorkerForm;
use core\Validator;


class SearchWorkerCtrl {

    private $form;
    private $worker_records;
    public $offset = 1;
    public $records = 5;
    private $where;
    private $price;

    public function __construct() {

        $this->form = new SearchWorkerForm();

    }

    public function getParams() {

        $this->form->surname_search = ParamUtils::getFromRequest('surname_search');
        $this->form->place_search = ParamUtils::getFromRequest('place_search');

        return !App::getMessages()->isError();
    }


    public function action_SearchWorker() {

        $this->getParams();

        $search_params = []; 

        if (isset($this->form->surname_search) && strlen($this->form->surname_search) > 0) {
            $search_params['nazwisko[~]'] = $this->form->surname_search . '%'; 
        }

        if (isset($this->form->place_search)) {

            if ($this->form->place_search != 1) {
            $search_params['placowka_id_placowki[~]'] = (int)$this->form->place_search -  1; 
            }
        }

        $num_params = sizeof($search_params);

        if ($num_params > 1) {
            $this->where = ["AND" => &$search_params];
        } else {
            $this->where = &$search_params;
        }
        
        $this->where ["ORDER"] = "nazwisko";

        //stronicowanie
        $offset = ParamUtils::getFromCleanURL(1); 
        
        if(isset($offset) && is_numeric($offset) && $offset > 0) {
            $this->offset += $offset - 1;
        }

        if(isset($offset) && $offset == 0) {
            try {

                $this->records = App::getDB() -> count("pracownik");
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

        $this->result();
        $this->generateView();

    }

        public function result() {

        if (!(strlen($this->form->surname_search > 0)) && !($this->form->place_search > 1)) {

            try {
                $this->worker_records = App::getDB()->select("pracownik", 
                ["id_pracownika","placowka_id_placowki","imie","nazwisko","data_ur",
                "miasto","ulica","nr_domu_miesz","kod_pocz",
                "nr_tel","nip","data_zatrud","czy_aktywny" 
                ], ["LIMIT" => [(($this->offset - 1) * $this->records), $this->records]]);
    
            } catch (\PDOException $e) {
                Utils::addErrorMessage('Błąd bazy danych');
    
                if (App::getConf()->debug)
                    Utils::addErrorMessage($e->getMessage());
            }   

        } else {

        try {
            $this->worker_records = App::getDB()->select("pracownik", 
            ["id_pracownika","placowka_id_placowki","imie","nazwisko","data_ur",
            "miasto","ulica","nr_domu_miesz","kod_pocz",
            "nr_tel","nip","data_zatrud","czy_aktywny" 
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
            $isNext = App::getDB()->has("pracownik",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
   
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function generateView() {

        App::getSmarty()->assign('worker_records',$this->worker_records);
        App::getSmarty()->assign('offset', $this->offset);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("isNextPage", $this->isNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchWorkerView.tpl");

    }

    public function action_AddWorker() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddWorkerView.tpl"); 
    }

    


}