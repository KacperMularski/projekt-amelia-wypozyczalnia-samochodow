<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\EditWorkerForm;
use core\Validator;


class EditWorkerCtrl {

    private $form;
    private $record;
    

    public function __construct() {

        $this->form = new EditWorkerForm();

        
    }

    public function idValidate() {

        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');
 
        return ! App::getMessages()->isError();
    }

    public function action_EditWorker() {

        if ($this->idValidate()) {

            $this->loadParameters();  
        }

        $this->generateView();

    }

    public function loadParameters() {

        try {

            $this->record = App::getDB() -> get("pracownik",["placowka_id_placowki",
            "imie","nazwisko","miasto","ulica","nr_domu_miesz","kod_pocz","nr_tel",
            "nip","czy_aktywny"], ["id_pracownika" => $this->form->id]); 

            $this->form->placowka = $this->record['placowka_id_placowki'];
            $this->form->imie = $this->record['imie'];
            $this->form->nazwisko = $this->record['nazwisko'];
            $this->form->miasto = $this->record['miasto'];
            $this->form->ulica = $this->record['ulica'];
            $this->form->nr_domu_miesz = $this->record['nr_domu_miesz'];
            $this->form->kod_pocz = $this->record['kod_pocz'];
            $this->form->nr_tel = $this->record['nr_tel'];
            $this->form->nip = $this->record['nip'];
            $this->form->czy_aktywny = $this->record['czy_aktywny'];

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function editValidate() {

        if (! (isset($this->form->placowka) && isset($this->form->imie) && isset($this->form->nazwisko) 
            && isset($this->form->miasto) && isset($this->form->ulica) && isset($this->form->nr_domu_miesz) 
            && isset($this->form->kod_pocz) && isset($this->form->nr_tel) 
            && isset($this->form->nip) && isset($this->form->czy_aktywny))) {

			    return false;
			}

            $val = new Validator();

            $val->validate($this->form->placowka,[
                'trim' => true,
                'required' => true,
                'min' => 1, 
                'max' => 5, 
                'int' => true,
                'required_message' => 'Nie wybrano placówki',
                'validator_message' => 'Placówka (1-5)'
            ]);

            $val->validate($this->form->imie,[
                'trim' => true,
                'required' => true,
                'max_length' => 30, 
                'required_message' => 'Nie wybrano imienia',
                'validator_message' => 'Imie max 30 znaków'
            ]);

            $val->validate($this->form->nazwisko,[
                'trim' => true,
                'required' => true,
                'max_length' => 35,
                'required_message' => 'Nie wybrano nazwiska',
                'validator_message' => 'Nazwisko max 35 znaków'
            ]);

            $val->validate($this->form->miasto,[
                'trim' => true,
                'required' => true,
                'max_length' => 40,
                'required_message' => 'Nie wybrano miasta',
                'validator_message' => 'Miasto max 40 znaków'
            ]);

            $val->validate($this->form->ulica,[
                'trim' => true,
                'required' => true,
                'max_length' => 35,
                'required_message' => 'Nie wybrano ulicy',
                'validator_message' => 'Ulica max 35 znaków'
            ]);

            $val->validate($this->form->nr_domu_miesz,[
                'trim' => true,
                'required' => true, 
                'int' => true,
                'required_message' => 'Nie wybrano nr domu',
                'validator_message' => 'Numer domu - liczba całkowita'
            ]);

            $val->validate($this->form->kod_pocz,[
                'required' => true,
                'max_length' => 6,
                'required_message' => 'Nie wybrano kodu pocztowego',
                'validator_message' => 'Zły format kodu pocztowego (..-...)'
            ]);

            $val->validate($this->form->nr_tel,[
                'trim' => true,
                'required' => true,
                'min_length' => 11, 
                'max_length' => 11, 
                'int' => true,
                'required_message' => 'Nie wybrano numeru telefonu',
                'validator_message' => 'Zły format numeru telefonu (11 cyfr, 48...)'
            ]);

            $val->validate($this->form->nip,[
                'trim' => true,
                'required' => true,
                'max_length' => 10,
                'required_message' => 'Nie wybrano NIP',
                'validator_message' => 'Zły format NIP (10 znaków)'

            ]);

            $val->validate($this->form->czy_aktywny,[
                'trim' => true,
                'required' => true,
                'int' => true,
                'max' => 1,
                'required_message' => 'Nie wybrano czy aktywny',
                'validator_message' => 'Zły format (1 lub 0)'
            ]); 

        return ! App::getMessages()->isError();  
    }

    public function loadParametersForm(){

        $this->form->placowka = ParamUtils::getFromRequest('placowka');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->nr_domu_miesz = ParamUtils::getFromRequest('nr_domu_miesz');
        $this->form->kod_pocz = ParamUtils::getFromRequest('kod_pocz');
        $this->form->nr_tel = ParamUtils::getFromRequest('nr_tel');
        $this->form->nip = ParamUtils::getFromRequest('nip');
        $this->form->czy_aktywny = ParamUtils::getFromRequest('czy_aktywny');
    }

    public function action_saveEditWorker() {

        $this->idValidate();
        $this->loadParameters();
        $this->loadParametersForm();

        if ($this->editValidate()) {

            try {

                $this->record = App::getDB() -> update("pracownik",["placowka_id_placowki" => (int)$this->form->placowka,
                "imie" => $this->form->imie,"nazwisko" => $this->form->nazwisko,"miasto" => $this->form->miasto,
                "ulica" => $this->form->ulica,"nr_domu_miesz" => (int)$this->form->nr_domu_miesz,"kod_pocz" => $this->form->kod_pocz,
                "nr_tel" => (int)$this->form->nr_tel, "nip" => $this->form->nip, "czy_aktywny" => (int)$this->form->czy_aktywny], 
                ["id_pracownika" => $this->form->id]); 
                         
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
                    
            
            App::getMessages()->addMessage(new \core\Message("Edycja przebiegła pomyślnie !", \core\Message::INFO)); 

            
            App::getRouter()->forwardTo('SearchWorker');   
        }

        else {

            $this->generateView();
        }

    }

    public function generateView() {

        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("EditWorkerView.tpl");
    }

}

