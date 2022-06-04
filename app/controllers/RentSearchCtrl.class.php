<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\RentSearchForm;
use core\Validator;

class RentSearchCtrl {

    private $form;
    private $checkbox1;
    private $checkbox2;
    private $vehicle;
    private $vehicles_count;

    public function __construct() {

        $this->form = new RentSearchForm();

    }

    public function getParams() {

        $this->form->placowka = ParamUtils::getFromRequest('placowka');
        $this->form->data_wyp = ParamUtils::getFromRequest('data_wyp');
        $this->form->data_zw = ParamUtils::getFromRequest('data_zw');
        $this->form->cena = ParamUtils::getFromRequest('cena');
        $this->form->skrzynia = ParamUtils::getFromRequest('skrzynia');
        $this->form->paliwo = ParamUtils::getFromRequest('paliwo');
		
    }

    public function validate() {

        if (! (isset($this->form->data_wyp) && isset($this->form->data_zw))) {
            return false;
            }

        $val = new Validator();

        $val->validate($this->form->data_wyp,[
            'required' => true,
            'required_message' => 'Nie wybrano daty wypozyczenia'
        ]);

        $val->validate($this->form->data_zw,[
            'required' => true,
            'required_message' => 'Nie wybrano daty zwrotu'
        ]);

        $val->validate($this->form->placowka,[
            'required' => true,
            'required_message' => 'Nie wybrano miejsca'
        ]);

        if (! App::getMessages()->isError()) {

            if (((strtotime($this->form->data_zw) - strtotime($this->form->data_wyp)) / (60*60*24)) < 0) {

                App::getMessages()->addMessage(new \core\Message("Nieprawidłowy termin rezerwacji", \core\Message::ERROR)); 
            }
        }

        return ! App::getMessages()->isError();  
    }

    public function checkboxVerify() {

        if (isset($this->form->skrzynia)) {

            if ((in_array('manual', $this->form->skrzynia) && !(in_array('automat', $this->form->skrzynia)))){
                $this->checkbox1 = 1;
            }
            if ((in_array('manual', $this->form->skrzynia) && (in_array('automat', $this->form->skrzynia)))){
                $this->checkbox1 = 2;
            }
            if ((in_array('automat', $this->form->skrzynia) && !(in_array('manual', $this->form->skrzynia)))){
                $this->checkbox1 = 3;
            }
        

        }

        if (isset($this->form->paliwo)) {

            if ((in_array('benzyna', $this->form->paliwo) && !(in_array('diesel', $this->form->paliwo)))){
                $this->checkbox2 = 1;
            }
            if ((in_array('benzyna', $this->form->paliwo) && (in_array('diesel', $this->form->paliwo)))){
                $this->checkbox2 = 2;
            }
            if ((!in_array('benzyna', $this->form->paliwo) && (in_array('diesel', $this->form->paliwo)))){
                $this->checkbox2 = 3;
            }
            
    
        }
    }

    public function result() {

        if (! App::getMessages()->isError()) {

            //Kryteria sortowania zapisywane do odpowiednich zmiennych

            //Cena
            if ($this->form->cena == "rosnaco") {
                $k_cena = "ASC";
            } else {
                $k_cena = "DESC";
            }


            //Skrzynia
            if (isset($this->form->skrzynia)) {

                if ((in_array('manual', $this->form->skrzynia) && !(in_array('automat', $this->form->skrzynia)))){
                    $k_skrzynia = "manualna";
                }
                if ((!in_array('manual', $this->form->skrzynia) && (in_array('automat', $this->form->skrzynia)))){
                    $k_skrzynia = "automatyczna";
                }
                if ((in_array('manual', $this->form->skrzynia) && (in_array('automat', $this->form->skrzynia)))){
                    $k_skrzynia = "null";
                    $k_skrzynia_null = "[!]";
                }

            } else {
                $k_skrzynia = "null";
                $k_skrzynia_null = "[!]";
            }  

            //Rodzaj paliwa
            if (isset($this->form->paliwo)) {

                if ((in_array('benzyna', $this->form->paliwo) && !(in_array('diesel', $this->form->paliwo)))){
                    $k_paliwo = "benzyna";
                }
                if ((!in_array('benzyna', $this->form->paliwo) && (in_array('diesel', $this->form->paliwo)))){
                    $k_paliwo = "diesel";
                }
                if ((in_array('benzyna', $this->form->paliwo) && (in_array('diesel', $this->form->paliwo)))){
                    $k_paliwo = "null";
                    $k_paliwo_null = "[!]";
                }

            } else {
                $k_paliwo = "null";
                $k_paliwo_null = "[!]";
            }



            try {

                if (!isset($k_skrzynia_null)) {
                    $k_skrzynia_null = "";
                }

                if (!isset($k_paliwo_null)) {
                    $k_paliwo_null = "";
                }

                $this->vehicle = App::getDB() -> select("samochod", ["id_pojazdu", "marka", "model", "poj_silnika", "rodz_paliwa", "cena_doba"
                ,"liczba_miejsc", "skrzynia", "img"], ["czy_wypoz" => "nie", "placowka_id_placowki" => intval($this->form->placowka) ,"skrzynia$k_skrzynia_null" => "$k_skrzynia", 
                "rodz_paliwa$k_paliwo_null" => "$k_paliwo", "ORDER" => ["cena_doba" => "$k_cena"]]);
                 

                $this->vehicles_count = App::getDB() -> count("samochod", ["czy_wypoz" => "nie", "skrzynia$k_skrzynia_null" => "$k_skrzynia", 
                "rodz_paliwa$k_paliwo_null" => "$k_paliwo", "placowka_id_placowki" => intval($this->form->placowka)]);
                
             
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

    }



    public function action_rentSearch() {

        $this->getParams();
        $this->validate();
        $this->result();
        $this->checkboxVerify();
        $this->saveDate();
        $this->generateView();

    }

    public function saveDate() {

        \core\SessionUtils::store("data_wyp", $this->form->data_wyp);
        \core\SessionUtils::store("data_zw", $this->form->data_zw);
  
    }

    public function generateView() {



        App::getSmarty()->assign('checkbox1', $this->checkbox1);
        App::getSmarty()->assign('checkbox2', $this->checkbox2);
        App::getSmarty()->assign('vehicle', $this->vehicle);
        App::getSmarty()->assign('vehicles_count', $this->vehicles_count);
        
        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("RentView.tpl");
    }



}