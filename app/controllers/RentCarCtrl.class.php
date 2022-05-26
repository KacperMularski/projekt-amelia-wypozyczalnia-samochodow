<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\PasswordChangeForm;
use core\RoleUtils;
use core\SessionUtils;
use core\Validator;


class RentCarCtrl {

private $id_pojazdu;   

public function getParams() {

    $this->id_pojazdu = ParamUtils::getFromCleanURL(1,true,"Nie wybrano pojazdu");
    $this->placowka = ParamUtils::getFromCleanURL(2,true,"Nie wybrano miejsca");
    $this->data_wyp = \core\SessionUtils::load("data_wyp", false);
    $this->data_zw = \core\SessionUtils::load("data_zw", false);
    
}

public function validate() {

    $val = new Validator();

    //walidacja czy dotarła data wypożyczenia i zwrotu
    $val->validate($this->data_wyp && $this->data_zw,[
        'required' => true,
        'required_message' => 'Nie wybrano daty rezerwacji. Proszę wrócić na stronę wypożyczania'
    ]);

    //walidacja id pojazdu
    

    $val->validate($this->id_pojazdu,[
        'numeric' => true,
        'validator_message' => 'Numer pojazdu musi być liczbą całkowitą'   
    ]);

    //walidacja id placówki
    $val->validate($this->placowka,[
        'numeric' => true,
        'validator_message' => 'Numer miejsca musi być liczbą całkowitą'   
    ]);
    
    if (! App::getMessages()->isError() ) {

    try {

            $this->vehicle = App::getDB() -> has("samochod", ["id_pojazdu" => $this->id_pojazdu]);
            $this->place = App::getDB() -> has("samochod", ["placowka_id_placowki" => $this->placowka]);

            if(! $this->vehicle) {
                App::getMessages()->addMessage(new \core\Message("Nie istnieje pojazd o wybranym numerze!", \core\Message::ERROR));    
            }

            if(! $this->place) {
                App::getMessages()->addMessage(new \core\Message("W tym miejscu nie ma wskazanego pojazdu!", \core\Message::ERROR));    
            }
            
        } catch (\PDOException $ex) {

        App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR));

        } 
    }

    return ! App::getMessages()->isError();
}

public function generateView(){

    App::getSmarty()->assign('id_pojazdu',$this->id_pojazdu);  
    App::getSmarty()->assign('placowka',$this->placowka); 
    App::getSmarty()->assign('data_wyp',$this->data_wyp); 
    App::getSmarty()->assign('data_zw',$this->data_zw);  
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("RentCarView.tpl");
}


public function action_rentCar(){

    $this->getParams();
    $this->validate();
    $this->generateView();
}

}