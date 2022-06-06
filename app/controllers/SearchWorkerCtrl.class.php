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
    private $records;

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
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "nazwisko";

        try {
            $this->records = App::getDB()->select("pracownik", 
            ["id_pracownika","placowka_id_placowki","imie","nazwisko","data_ur",
            "miasto","ulica","nr_domu_miesz","kod_pocz",
            "nr_tel","nip","data_zatrud","czy_aktywny" 
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
        App::getSmarty()->display("SearchWorkerView.tpl");

    }

    public function action_AddWorker() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddWorkerView.tpl"); 
    }

    


}