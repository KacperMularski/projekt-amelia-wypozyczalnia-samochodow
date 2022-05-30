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


class RentCarCtrl {

private $id_pojazdu;
private $placowka; 
private $data_wyp; 
private $data_zw; 
private $rentValue;  
private $vehicle; 
private $daysValue;


public function getParams() {

    $this->id_pojazdu = ParamUtils::getFromCleanURL(1,true,"Nie wybrano pojazdu");
    $this->placowka = ParamUtils::getFromCleanURL(2,true,"Nie wybrano miejsca");
    $this->data_wyp = \core\SessionUtils::load("data_wyp", true);
    $this->data_zw = \core\SessionUtils::load("data_zw", true);
    
    
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
            $place = App::getDB() -> has("samochod", ["placowka_id_placowki" => $this->placowka]);

            if(! $this->vehicle) {
                App::getMessages()->addMessage(new \core\Message("Nie istnieje pojazd o wybranym numerze!", \core\Message::ERROR));    
            }

            if(! $place) {
                App::getMessages()->addMessage(new \core\Message("W tym miejscu nie ma wskazanego pojazdu!", \core\Message::ERROR));    
            }

            if (! App::getMessages()->isError() ) {

                $available = App::getDB() -> has("samochod", ["id_pojazdu" => $this->id_pojazdu, "czy_wypoz" => "tak"]);

                if($available) {
                    App::getMessages()->addMessage(new \core\Message("Ten pojazd został już wypożyczony", \core\Message::ERROR));    
                }

            }
            
        } catch (\PDOException $ex) {

        App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR));

        } 
    }

    return ! App::getMessages()->isError();
}


public function result() {

    if (! App::getMessages()->isError()) {
        //konwersja do typu date i wyliczenie ilości dni rezerwacji
        $this->daysValue = (strtotime($this->data_zw) - strtotime($this->data_wyp)) / (60*60*24);
        //obliczenie wartości rezerwacji

        try {


            $this->vehicle = App::getDB() -> get("samochod", ["id_pojazdu", "marka", "model", "poj_silnika", "rodz_paliwa", "cena_doba"
            ,"liczba_miejsc", "skrzynia", "img"], ["id_pojazdu" => $this->id_pojazdu]); 
            
            $this->rentValue = $this->vehicle["cena_doba"] * $this->daysValue;
                    
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            } 

        

    }
    else {

        $this->errorGenerateView();   
    }
}

public function saveInSession() {

    \core\SessionUtils::store("id_pojazdu", $this->id_pojazdu);
    \core\SessionUtils::store("rentValue", $this->rentValue);
    \core\SessionUtils::store("placowka", $this->placowka);

}

public function action_rentCar(){

    $this->getParams();
    $this->validate();
    $this->result();
    $this->saveInSession();
    $this->generateView();
}


public function generateView(){

    
    App::getSmarty()->assign('vehicle',$this->vehicle); 
    App::getSmarty()->assign('placowka',$this->placowka); 
    App::getSmarty()->assign('data_wyp',$this->data_wyp); 
    App::getSmarty()->assign('data_zw',$this->data_zw);
    App::getSmarty()->assign('rentValue',$this->rentValue); 
    App::getSmarty()->assign('daysValue',$this->daysValue); 
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("RentCarPayView.tpl");
}



public function errorGenerateView() {

    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("ErrorPageView.tpl"); 

}





}