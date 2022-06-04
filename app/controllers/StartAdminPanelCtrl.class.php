<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Utils;

class StartAdminPanelCtrl {
    
    public function action_adminWypozyczeniaPage() {

        App::getSmarty()->assign('page_title','RacingCars'); 
        App::getSmarty()->display("AdminWypozyczeniaView.tpl");
        
    }

    public function action_adminUzytkownicyPage() {

        App::getSmarty()->assign('page_title','RacingCars'); 
        App::getSmarty()->display("AdminUzytkownicyView.tpl");
        
    }

    public function action_adminSamochodyPage() {

        App::getSmarty()->assign('page_title','RacingCars'); 
        App::getSmarty()->display("AdminSamochodyView.tpl");
        
    }

    public function action_adminPracownicyPage() {

        App::getSmarty()->assign('page_title','RacingCars'); 
        App::getSmarty()->display("AdminPracownicyView.tpl");
        
    }

}

    