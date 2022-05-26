<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\LoginForm;
use core\RoleUtils;
use core\SessionUtils;





class LoginCtrl {

private $form;

    public function __construct() {

        $this->form = new LoginForm();

    }

//Dane drugi formularz rejestracji

    public function getParams() {
    
        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->password = ParamUtils::getFromRequest('password');

        }

    public function validate() {
                
            if (! (isset($this->form->login) && isset($this->form->password)) ) {
                    return false;
                    }
                
            if ($this->form->login == "") {
                    App::getMessages()->addMessage(new \core\Message("Nie podano loginu!", \core\Message::ERROR));
            }
            if ($this->form->password == "") {
                    App::getMessages()->addMessage(new \core\Message("Nie podano hasła!", \core\Message::ERROR));    
            }


            if(! App::getMessages()->isError()) {
                try {

                    $login_verify = App::getDB() -> has("konto", ["login" => $this->form->login]);
                    $password_verify = App::getDB() -> has("konto", ["haslo" => $this->form->password]);
                    
                        if (! $login_verify || ! $password_verify) {
                            App::getMessages()->addMessage(new \core\Message("Nieprawidłowe dane logowania!", \core\Message::ERROR)); 
                        }                     
    
            } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }



            }

            return ! App::getMessages()->isError();
    }


public function action_login() {

$this->getParams();
$this->validate();

if(App::getMessages()->isError()) {
        
    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("LoginView.tpl");
    
}

if( ! App::getMessages()->isError()) {

    try {
        //Dodanie do sesji id zalogowanego uzytkownika (potrzebne do złożenia zamówienia)
        $user_log = App::getDB() -> get("konto", ["osoba_id_osoby", "login"],["login" => $this->form->login, "haslo" => $this->form->password]);
        $admin_log = App::getDB() -> has("konto", ["osoba_id_osoby" => $user_log["osoba_id_osoby"], "rola" => "admin"]);
        SessionUtils::store("user_id", $user_log["osoba_id_osoby"]);
        SessionUtils::store("user_login", $user_log["login"]);

        if ($admin_log) {
        RoleUtils::addRole("admin");    
        }
        if (!$admin_log) {
        RoleUtils::addRole("user");
        }

        
                
        } catch (\PDOException $ex) {
        App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
        }

        

    App::getRouter()->redirectTo('start');
}

}

public function action_logout() {

    SessionUtils::remove("user_id");
    SessionUtils::remove("user_login");
    SessionUtils::remove("data_wyp");
    SessionUtils::remove("data_zw");
    

    session_destroy();
    
    App::getRouter()->redirectTo("start");

}






}