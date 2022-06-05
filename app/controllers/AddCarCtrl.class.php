<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\AddCarForm;
use core\Validator;


class AddCarCtrl {

    private $form;
    private $record;
    

    public function __construct() {

        $this->form = new AddCarForm();

        
    }

    public function getParams(){

        $this->form->marka = ParamUtils::getFromRequest('marka');
        $this->form->model = ParamUtils::getFromRequest('model');
        $this->form->miasto = ParamUtils::getFromRequest('miasto');
        $this->form->rok = ParamUtils::getFromRequest('rok');
        $this->form->silnik = ParamUtils::getFromRequest('silnik');
        $this->form->paliwo = ParamUtils::getFromRequest('paliwo'); 
        $this->form->cena = ParamUtils::getFromRequest('cena');
        $this->form->miejsca = ParamUtils::getFromRequest('miejsca');
        $this->form->skrzynia = ParamUtils::getFromRequest('skrzynia');
        $this->form->img = ParamUtils::getFromRequest('img');
        
    }


    public function validate() {

        if (! (isset($this->form->marka) && isset($this->form->model) && isset($this->form->miasto) && isset($this->form->rok) 
            && isset($this->form->silnik) && isset($this->form->paliwo) && isset($this->form->cena) && isset($this->form->miejsca)
            && isset($this->form->skrzynia) && isset($this->form->img) )) {
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
                'required' => true,
                'required_message' => 'Nie wpisano ścieżki obrazka',
            ]); 
            
        return ! App::getMessages()->isError();  
    }

    

    public function action_saveAddCar() {

        $this->getParams();

        if ($this->validate()) {

            try {
                App::getDB() ->  insert("samochod", ["marka" => $this->form->marka, "model" => $this->form->model, 
                "rok_prod" => $this->form->rok, "poj_silnika" => (int)$this->form->silnik, "rodz_paliwa" => $this->form->paliwo,
                "cena_doba" => (float)$this->form->cena, "liczba_miejsc" => (int)$this->form->miejsca,
                "skrzynia" => $this->form->skrzynia, "img" => $this->form->img,"placowka_id_placowki" => (int)$this->form->miasto ]);
               
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
                    
            
            App::getMessages()->addMessage(new \core\Message("Pomyślnie dodano samochód!", \core\Message::INFO)); 

            
            App::getRouter()->forwardTo('SearchCar');   
        }

        else {

            $this->generateView();
        }

    }

    public function generateView() {

        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddCarView.tpl");
    }

}

