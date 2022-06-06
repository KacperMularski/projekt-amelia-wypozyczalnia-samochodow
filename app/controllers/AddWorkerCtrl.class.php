<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\AddWorkerForm;
use core\Validator;


class AddWorkerCtrl {

    private $form;

    public function __construct() {

        $this->form = new AddWorkerForm();
  
    }

    public function getParams() {

        $this->form->placowka = ParamUtils::getFromRequest('placowka');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->ulica = ParamUtils::getFromRequest('ulica');
        $this->form->nr_domu_miesz = ParamUtils::getFromRequest('nr_domu_miesz');
        $this->form->kod_pocz = ParamUtils::getFromRequest('kod_pocz');
        $this->form->nr_tel = ParamUtils::getFromRequest('nr_tel');
        $this->form->nip = ParamUtils::getFromRequest('nip');
        $this->form->data_zatrud = ParamUtils::getFromRequest('data_zatrud');
        $this->form->data_ur = ParamUtils::getFromRequest('data_ur');

	}

    public function validate() {
		
		if (! (isset($this->form->placowka) && isset($this->form->imie) && isset($this->form->nazwisko) 
            && isset($this->form->miasto) && isset($this->form->ulica) && isset($this->form->nr_domu_miesz) 
            && isset($this->form->kod_pocz) && isset($this->form->nr_tel) && isset($this->form->nip) 
            && isset($this->form->data_ur) && isset($this->form->data_zatrud))) {

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

            $val->validate($this->form->data_ur,[
                'required' => true,
                'date_format' => 'Y-m-d',
                'required_message' => 'Nie wybrano daty urodzenia',
                'validator_message' => 'Zły format numeru daty (Y-m-d)'
            ]);

            $val->validate($this->form->data_zatrud,[
                'required' => true,
                'date_format' => 'Y-m-d',
                'required_message' => 'Nie wybrano daty zatrudnienia',
                'validator_message' => 'Zły format numeru daty (Y-m-d)'
            ]);
            
            return ! App::getMessages()->isError();  
        }

    public function action_saveAddWorker() {

        $this->getParams();

        if ($this->validate()) {
            try {
                //Dane internetowe
                App::getDB() -> insert("pracownik", 
                    ["placowka_id_placowki" => (int)$this->form->placowka , "imie" => $this->form->imie , "nazwisko" => $this->form->nazwisko, 
                    "data_ur" => $this->form->data_ur, "miasto" => $this->form->miasto, "ulica" => $this->form->ulica,
                    "nr_domu_miesz" => $this->form->nr_domu_miesz, "kod_pocz" => $this->form->kod_pocz, "nr_tel" => $this->form->nr_tel,
                    "nip" => $this->form->nip, "data_zatrud" => $this->form->data_zatrud ]);
                            
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
                
                App::getMessages()->addMessage(new \core\Message("Pomyślnie dodano pracownika!", \core\Message::INFO)); 

            
                App::getRouter()->forwardTo('SearchWorker'); 
        }
        else {
            $this->generateView();
        }
    }

    public function generateView() {

        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddWorkerView.tpl"); 
    }

}


