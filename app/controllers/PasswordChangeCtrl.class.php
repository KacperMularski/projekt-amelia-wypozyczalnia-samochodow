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





class PasswordChangeCtrl {

private $form;

    public function __construct() {

        $this->form = new PasswordChangeForm();

    }



public function getParams() {

    $this->form->old_pass = ParamUtils::getFromRequest('old_pass');
    $this->form->new_pass = ParamUtils::getFromRequest('new_pass');
    $this->form->new_pass_repeat = ParamUtils::getFromRequest('new_pass_repeat');

}

public function validate() {

    $val = new Validator();

    $val->validate($this->form->old_pass,[
        'required' => true,
        'required_message' => 'Wprowadź obecne hasło'
    ]);

    $id =  SessionUtils::load("user_id", true);

    try {

        $password_verify = App::getDB() -> has("konto", ["haslo" => $this->form->old_pass, "id_konta" => $id]);
        
            if (! $password_verify) {
                App::getMessages()->addMessage(new \core\Message("Hasło jest nieprawidłowe!", \core\Message::ERROR)); 
            }                     

        } catch (\PDOException $ex) {
             App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
    }

    if(! App::getMessages()->isError()) {

    $val->validate($this->form->new_pass,[
        'required' => true,
        'required_message' => 'Hasło jest wymagane',
        'regexp' => "/(.{8,})/",
        'validator_message' => 'Hasło powinno mieć co najmniej 8 znaków'
    ]);

    $val->validate($this->form->new_pass_repeat,[
        'required' => true,
        'required_message' => 'Powtórz hasło'
    ]);

    }

    if(! App::getMessages()->isError()) {

        if ($this->form->old_pass == $this->form->new_pass) {
            App::getMessages()->addMessage(new \core\Message("Nowe hasło musi być inne", \core\Message::ERROR));
        }

        if ($this->form->new_pass != $this->form->new_pass_repeat) {
            App::getMessages()->addMessage(new \core\Message("Hasła muszą być identyczne", \core\Message::ERROR));
        }
    }

    return ! App::getMessages()->isError();
}



public function action_passwordChange() {

   $this->generateView(); 
}

public function action_savePasswordChange() {

    $this->getParams();
    $this->validate();

    if( App::getMessages()->isError()) {
   
        $this->generateView();
    }

    else {

        $id =  SessionUtils::load("user_id", true);

        try {

           App::getDB() -> update("konto", ["haslo" => $this->form->new_pass],["id_konta" => $id]);
            
            } catch (\PDOException $ex) {
                 App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
        }    
   
        App::getMessages()->addMessage(new \core\Message("Edycja hasła przebiegła pomyślnie !", \core\Message::INFO));    
        App::getRouter()->forwardTo('personEdit');
    }  
}

public function generateView() {

    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("PasswordChangeView.tpl");
    
}   

}