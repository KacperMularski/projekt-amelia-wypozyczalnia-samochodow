<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\PaymentForm;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;

class PaidCtrl {

public function __construct() {

    $this->form = new PaymentForm();
    
}

public function getParams() {

    $this->form->platnosc = ParamUtils::getFromRequest('platnosc');
    $this->form->id_pojazdu = \core\SessionUtils::load("id_pojazdu", false);
    $this->form->placowka = \core\SessionUtils::load("placowka", false);
    $this->form->rentValue = \core\SessionUtils::load("rentValue", false);
    $this->form->data_wyp = \core\SessionUtils::load("data_wyp", false);
    $this->form->data_zw = \core\SessionUtils::load("data_zw", false);
    $this->form->id_klienta = \core\SessionUtils::load("user_id", true);

}

public function validate() {

    $val = new Validator();

    $val->validate($this->form->platnosc && $this->form->id_pojazdu && $this->form->placowka 
    && $this->form->rentValue && $this->form->data_wyp && $this->form->data_zw,[
        'required' => true,
        'required_message' => 'Brak parametrów'
    ]);

    return ! App::getMessages()->isError();

}


public function result(){
    
    if (! App::getMessages()->isError()) {

        try {

            
            App::getDB() -> insert("platnosc", ["wart_wyp" => floatval($this->form->rentValue) , "forma_plat" => $this->form->platnosc  , "status_plat" => "oplacono"]);
            $last_id_platnosc = (int)App::getDB()->id();
        
            App::getDB() -> insert("wypozyczenie", ["platnosc_id_platnosci" => $last_id_platnosc , "samochod_id_pojazdu" => (int)$this->form->id_pojazdu  ,
            "osoba_id_osoby" => (int)$this->form->id_klienta, "placowka_id_placowki" => (int)$this->form->placowka, "data_wyp" => date($this->form->data_wyp), "data_zw" => date($this->form->data_zw)]);
            $last_id_wypozyczenie = (int)App::getDB()->id();

            App::getDB() -> update("platnosc", ["wypozyczenie_id_wypozyczenia" => $last_id_wypozyczenie],["id_platnosci" => $last_id_platnosc]);

            App::getDB() -> update("samochod", ["czy_wypoz" => "tak"],["id_pojazdu" => (int)$this->form->id_pojazdu]);
                
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            } 
        
    }

    else {

        $this->errorGenerateView(); 

    }

}

public function action_rentPay() {

    $this->getParams();  
    $this->validate();
    $this->result();
    $this->paidGenerateView(); 
      
  }

public function paidGenerateView() {

    App::getSmarty()->assign('form',$this->form);
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("PaidView.tpl");
    
}

public function errorGenerateView() {
  
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("ErrorPageView.tpl"); 

}





}