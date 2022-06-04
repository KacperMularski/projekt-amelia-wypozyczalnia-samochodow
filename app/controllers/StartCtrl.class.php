<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class StartCtrl {
    
    public function action_start() {

        App::getSmarty()->assign('page_title','RacingCars'); 
        App::getSmarty()->display("StartView.tpl");
        
    }

    public function action_register_page() {

		App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("RegisterView.tpl");
        
    }

    public function action_login_page() {

		App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("LoginView.tpl");
        
    }

    public function action_final_register_page() {

		App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("FinalRegisterView.tpl");
        
    }

    public function action_offer_page() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("OfferView.tpl");

    }

    public function action_rent_page() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("RentView.tpl");

    }





    
}
