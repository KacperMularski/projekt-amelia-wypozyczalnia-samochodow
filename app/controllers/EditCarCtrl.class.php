<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\EditCarForm;
use core\Validator;


class EditCarCtrl {

    private $form;
    private $record;
    

    public function __construct() {

        $this->form = new EditCarForm();

        
    }

    public function idValidate() {

        $this->form->id = ParamUtils::getFromCleanURL(1, true, 'Błędne wywołanie aplikacji');

        try {
            $id_verify = App::getDB() -> has("samochod", ["id_pojazdu" => $this->form->id]);

            if (!$id_verify) {
                Utils::addErrorMessage('Nie istnieje samochód o tym ID'); 

                App::getRouter()->forwardTo('SearchCar');   
            }
            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        
        return !App::getMessages()->isError();
    }

    public function action_EditCar() {

        if ($this->idValidate()) {

            $this->loadParameters();  
        }

        $this->generateView();

    }

    public function loadParameters() {

        try {

            $this->record = App::getDB() -> get("samochod",
            ["marka","model","placowka_id_placowki","rok_prod","poj_silnika","rodz_paliwa","czy_wypoz","cena_doba","liczba_miejsc","skrzynia","img","czy_aktywny"], 
            ["id_pojazdu" => $this->form->id]); 

            $this->form->marka = $this->record['marka'];
            $this->form->model = $this->record['model'];
            $this->form->miasto = $this->record['placowka_id_placowki'];
            $this->form->rok = $this->record['rok_prod'];
            $this->form->silnik = $this->record['poj_silnika'];
            $this->form->paliwo = $this->record['rodz_paliwa'];
            $this->form->wypozyczony = $this->record['czy_wypoz'];
            $this->form->cena = $this->record['cena_doba'];
            $this->form->miejsca = $this->record['liczba_miejsc'];
            $this->form->skrzynia = $this->record['skrzynia'];
            $this->form->img = $this->record['img'];
            $this->form->aktywny = $this->record['czy_aktywny'];

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function editValidate() {

        if (! (isset($this->form->marka) && isset($this->form->model) && isset($this->form->miasto) && isset($this->form->rok) 
            && isset($this->form->silnik) && isset($this->form->paliwo) && isset($this->form->wypozyczony) && isset($this->form->cena) 
            && isset($this->form->miejsca) && isset($this->form->skrzynia) && isset($this->form->img) && isset($this->form->aktywny))) {
			return false;
			}

            $val = new Validator();

            $val->validate($this->form->marka,[
                'trim' => true,
                'required' => true,
                'max_length' => 25,
                'required_message' => 'Nie wybrano marki',
                'validator_message' => 'Max 25 znaków'
            ]);

            $val->validate($this->form->model,[
                'trim' => true,
                'required' => true,
                'max_length' => 30,
                'required_message' => 'Nie wybrano modelu',
                'validator_message' => 'Max 30 znaków'
            ]);

            $val->validate($this->form->miasto,[
                'trim' => true,
                'required' => true,
                'min' => 1, 
                'max' => 5, 
                'int' => true,
                'required_message' => 'Nie wybrano placówki',
                'validator_message' => 'Placówka (1-5)'
            ]);

            $val->validate($this->form->rok,[
                'trim' => true,
                'required' => true,
                'min_length' => 4, 
                'max_length' => 4, 
                'int' => true,
                'required_message' => 'Nie wybrano roku produkcji',
                'validator_message' => 'Zły format roku'

            ]);

            $val->validate($this->form->silnik,[
                'trim' => true,
                'required' => true,
                'max_length' => 11, 
                'int' => true,
                'required_message' => 'Nie wpisano pojemności',
                'validator_message' => 'Zły format pojemności'

            ]);

            $val->validate($this->form->paliwo,[
                'trim' => true,
                'required' => true,
                'max_length' => 10, 
                'required_message' => 'Nie wpisano rodzaju paliwa',
                'validator_message' => 'Paliwo - Max 10 znaków'
            ]);

            $val->validate($this->form->wypozyczony,[
                'required' => true,
                'max_length' => 3, 
                'min_length' => 3, 
                'required_message' => 'Nie wybrano wypożyczenia',
                'validator_message' => 'Wypozyczony - tak/nie'
            ]);

            $val->validate($this->form->cena,[
                'required' => true,
                'float' => true,
                'required_message' => 'Nie wpisano ceny',
                'validator_message' => 'Cena - format liczbowy'
            ]);

            $val->validate($this->form->miejsca,[
                'trim' => true,
                'required' => true,
                'max_length' => 11, 
                'int' => true,
                'required_message' => 'Nie wybrano liczby miejsc',
                'validator_message' => 'Miejsca - max 11 znaków'
            ]);

            $val->validate($this->form->skrzynia,[
                'trim' => true,
                'required' => true,
                'max_length' => 15, 
                'required_message' => 'Nie wybrano rodzaju skrzyni',
                'validator_message' => 'Skrzynia - max 15 znaków'
            ]);   
            
            $val->validate($this->form->img,[

                'trim' => true,
                'required' => false
                
            ]); 

            $val->validate($this->form->aktywny,[
                'trim' => true,
                'required' => true,
                'max' => 1,
                'int' => true,
                'required_message' => 'Nie wpisano czy aktywny',
                'validator_message' => 'Czy aktywny - tylko 1 lub 0'
            ]); 
            
        return ! App::getMessages()->isError();  
    }

    public function loadParametersForm(){

        $this->form->marka = ParamUtils::getFromRequest('marka');
        $this->form->model = ParamUtils::getFromRequest('model');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->rok = ParamUtils::getFromRequest('rok');
        $this->form->silnik = ParamUtils::getFromRequest('silnik');
        $this->form->paliwo = ParamUtils::getFromRequest('paliwo');
        $this->form->wypozyczony = ParamUtils::getFromRequest('wypozyczony');
        $this->form->cena = ParamUtils::getFromRequest('cena');
        $this->form->miejsca = ParamUtils::getFromRequest('miejsca');
        $this->form->skrzynia = ParamUtils::getFromRequest('skrzynia');
        $this->form->img = ParamUtils::getFromRequest('img');
        $this->form->aktywny= ParamUtils::getFromRequest('aktywny');
    }

    public function action_saveEditCar() {

        $this->idValidate();
        $this->loadParameters();
        $this->loadParametersForm();

        if ($this->editValidate()) {

            try {
                App::getDB() ->  update("samochod", ["marka" => $this->form->marka, "model" => $this->form->model, 
                "rok_prod" => $this->form->rok, "poj_silnika" => (int)$this->form->silnik, "rodz_paliwa" => $this->form->paliwo,
                "czy_wypoz" => $this->form->wypozyczony, "cena_doba" => (float)$this->form->cena, "liczba_miejsc" => (int)$this->form->miejsca,
                "skrzynia" => $this->form->skrzynia, "img" => $this->form->img, "czy_aktywny" => (int)$this->form->aktywny,
                "placowka_id_placowki" => (int)$this->form->miasto ], 
                ["id_pojazdu" => $this->form->id ]);
               
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
                    
            
            App::getMessages()->addMessage(new \core\Message("Edycja przebiegła pomyślnie !", \core\Message::INFO)); 

            
            App::getRouter()->forwardTo('SearchCar');   
        }

        else {

            $this->generateView();
        }

    }

    public function generateView() {

        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("EditCarView.tpl");
    }

}

