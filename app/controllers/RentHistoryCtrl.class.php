<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\RentHistoryForm;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;


class RentHistoryCtrl {

public function __construct() {

    $this->form = new RentHistoryForm();
        
}


public function getParam() {

    $this->form->id_klienta = (int)\core\SessionUtils::load("user_id", true);
}

public function validate() {

    $val = new Validator();

    $val->validate($this->form->id_klienta,[
        'required' => true,
        'required_message' => 'Wystąpił nieoczekiwany błąd'
    ]);
}


public function result() {
    
    try {
        
        $this->form->tab_wypozyczenie = App::getDB() -> select("wypozyczenie", 
        ["[>]samochod" => ["samochod_id_pojazdu" => "id_pojazdu"], "[>]platnosc" => ["platnosc_id_platnosci" => "id_platnosci"]],
        ["data_wyp", "data_zw","marka", "model", "wart_wyp"], 
        ["osoba_id_osoby" => $this->form->id_klienta]); 

           
        } catch (\PDOException $ex) {
        App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
        } 
}    


public function action_rentHistory() {

    $this->getParam();
    $this->validate();
    $this->result();
    $this->generateView();

}

public function generateView() {

    App::getSmarty()->assign('form',$this->form);  
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("RentHistoryView.tpl"); 

}

}