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
    public $offset = 1;
    public $records = 5;

    public function action_offer_page() {

        $offset = ParamUtils::getFromCleanURL(1); 
        
        if(isset($offset) && is_numeric($offset) && $offset > 0) {
            $this->offset += $offset - 1;
        }

        if(isset($offset) && $offset == 0) {
            try {

                $this->records = App::getDB() -> count("samochod");
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

        $this->results();
        $this->generateView();
                
    }

    public function isNextPage() {

        try{
            $isNext = App::getDB()->has("samochod",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
   
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function results() {

        try {

            $this->vehicle = App::getDB() -> select("samochod", ["id_pojazdu", "marka", "model", "poj_silnika", "rodz_paliwa", "cena_doba"
            ,"liczba_miejsc", "skrzynia", "img",],["LIMIT" => [(($this->offset - 1) * $this->records), $this->records]]);

                    
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            }  
    } 

    public function generateView() {

        App::getSmarty()->assign('vehicle', $this->vehicle);
        App::getSmarty()->assign('offset', $this->offset);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("isNextPage", $this->isNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("OfferView.tpl");
    }


}