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

        if (! (isset($this->form->data_wyp) && isset($this->form->data_zw) 
        && isset($this->form->skrzynia) && isset($this->form->paliwo)) ) {
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

        

        return ! App::getMessages()->isError();  
    }



    public function action_rentSearch() {

        $this->getParams();
        $this->validate();
        $this->generateView();

    }

    public function generateView() {

        App::getSmarty()->assign('form', $this->form);
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("RentView.tpl");
    }



}