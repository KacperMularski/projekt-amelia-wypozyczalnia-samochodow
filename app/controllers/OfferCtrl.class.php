<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\Validator;

class OfferCtrl {

    private $vehicle;
    private $vehicles_count;

    public function action_offer_page() {

        $this->results();
        $this->generateView();
    }

    public function results() {

        try {

            $this->vehicle = App::getDB() -> select("samochod", ["id_pojazdu", "marka", "model", "poj_silnika", "rodz_paliwa", "cena_doba"
            ,"liczba_miejsc", "skrzynia", "img"]);
            
            $this->vehicles_count = App::getDB() -> count("samochod");
                    
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            }  
    } 

    public function generateView() {
    
        App::getSmarty()->assign('vehicle', $this->vehicle);
        App::getSmarty()->assign('vehicles_count', $this->vehicles_count);
        
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("OfferView.tpl");
    }


}