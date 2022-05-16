<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\UserEditForm;


class PersonEditCtrl {

private $form;
private $id;

public function __construct(){

    $this->form = new UserEditForm();
}

public function idValidate() {

    if (! SessionUtils::load("user_id", true)) {
        App::getMessages()->addMessage(new \core\Message("Błąd wczytywania id", \core\Message::ERROR));
    }

    return !App::getMessages()->isError();
}


public function loadParameters () {

    $this->id =  SessionUtils::load("user_id", true);

    try {

    $this->user = App::getDB() -> get("osoba",["[>]konto" => ["id_osoby" => "id_konta"]],["imie","nazwisko","data_ur","nr_pr_jazdy","nr_tel","login","email"], ["id_osoby" => $this->id]); 

    $this->form->login = $this->user['login'];
    $this->form->login_check = $this->user['login'];
    $this->form->email = $this->user['email'];
    $this->form->email_check = $this->user['email'];
    $this->form->imie = $this->user['imie'];
    $this->form->nazwisko = $this->user['nazwisko'];
    $this->form->data_ur = $this->user['data_ur'];
    $this->form->nr_pr_jazdy = $this->user['nr_pr_jazdy'];
    $this->form->nr_tel = $this->user['nr_tel'];
                            

    } catch (\PDOException $ex) {
    App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
    }


    
}
public function validate() {

    if (! (isset($this->form->login) && isset($this->form->email) && isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->data_ur) && isset($this->form->nr_pr_jazdy) 
    && isset($this->form->nr_tel) ) ) {
        return false;
    }

    if ( $this->form->login == "" || $this->form->email == "" || $this->form->imie == "" || $this->form->nazwisko == "" || $this->form->data_ur == "" ||
    $this->form->nr_pr_jazdy == "" || $this->form->nr_tel == "" ) {
        
        App::getMessages()->addMessage(new \core\Message("Błąd wczytywania danych", \core\Message::ERROR));
    }


    return ! App::getMessages()->isError();
}

public function loadParametersForm () {

    $this->form->login = ParamUtils::getFromRequest('login');
	$this->form->email = ParamUtils::getFromRequest('email');
    $this->form->imie = ParamUtils::getFromRequest('imie');
    $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
    $this->form->nr_pr_jazdy = ParamUtils::getFromRequest('nr_pr_jazdy');
    $this->form->nr_tel = ParamUtils::getFromRequest('nr_tel');
    $this->form->data_ur = ParamUtils::getFromRequest('data_ur');

}

public function editFormValidate() {
    if (! (isset($this->form->login) && isset($this->form->email) && isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nr_pr_jazdy) && isset($this->form->nr_tel) && isset($this->form->data_ur))) {
			return false;
			}
		

		if ($this->form->login == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano nazwy użytkownika!", \core\Message::ERROR));
		}
		if ($this->form->email == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano adresu email!", \core\Message::ERROR));    
		}
        if ($this->form->imie == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano imienia!", \core\Message::ERROR));
        }
        if ($this->form->nazwisko == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano nazwiska!", \core\Message::ERROR));    
        }
        if ($this->form->nr_pr_jazdy == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano numeru prawa jazdy!", \core\Message::ERROR)); 
        }
        if ($this->form->nr_tel == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano numeru telefonu!", \core\Message::ERROR)); 
        }
        if ($this->form->data_ur == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano daty urodzenia!", \core\Message::ERROR)); 
        }

        if(! App::getMessages()->isError()) {

            if ($this->form->login != $this->form->login_check || $this->form->email != $this->form->email_check) {
                
            try {
                if ($this->form->login != $this->form->login_check) {
				    $login_verify = App::getDB() -> has("konto", ["login" => $this->form->login]);

                        if ($login_verify) {       
                            App::getMessages()->addMessage(new \core\Message("Ten login jest zajęty!", \core\Message::ERROR)); 
                        }

                }
                if ($this->form->email != $this->form->email_check) {
                    $email_verify = App::getDB() -> has("konto", ["email" => $this->form->email]);
                
                        if ($email_verify) {
                            App::getMessages()->addMessage(new \core\Message("Istnieje już konto o podanym adresie email!", \core\Message::ERROR)); 
                        }
                }

		} catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
		}
        }

        }
        
        if(! App::getMessages()->isError()) {

            if (strlen($this->form->login) < 5) {
                App::getMessages()->addMessage(new \core\Message("Login jest zbyt krótki!", \core\Message::ERROR)); 
            }
        }

         if(! App::getMessages()->isError()) {

            if ( ! is_numeric( $this->form->nr_pr_jazdy ) && ! $this->form->nr_pr_jazdy < 11) {
                App::getMessages()->addMessage(new \core\Message("Numer musi być liczbą całkowitą o długości 11 znaków!", \core\Message::ERROR)); 
            }
            if ( ! is_numeric( $this->form->nr_tel ) && ! $this->form->nr_tel < 11) {
                App::getMessages()->addMessage(new \core\Message("Numer telefonu musi być liczbą całkowitąo o długości 11 znaków!", \core\Message::ERROR)); 
            }
        }   
	
		return ! App::getMessages()->isError();    
	

}



public function action_personEdit() {

    $this->idValidate();
    $this->loadParameters();
    $this->validate();

    App::getSmarty()->assign('form',$this->form); 
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("PersonEditView.tpl");

}

public function action_editForm() {

    $this->idValidate();
    $this->loadParameters();
    $this->validate();

    $this->generateView();



}

public function action_savePersonEdit() {


    $this->loadParameters();
    $this->loadParametersForm();

        if (! (isset($this->form->login) && isset($this->form->email) && isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nr_pr_jazdy) && isset($this->form->nr_tel) && isset($this->form->data_ur)) ) {

        App::getMessages()->addMessage(new \core\Message("Błąd zapisu", \core\Message::ERROR));
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("ErrorPageView.tpl");
        
        exit();

        }

    $this->editFormValidate();

    if( App::getMessages()->isError()) {
   
        $this->generateView();
    }

    if( ! App::getMessages()->isError()) {

        try {
            App::getDB() ->  update("konto", ["login" => $this->form->login, "email" => $this->form->email], ["id_konta" => $this->id ] );
            App::getDB() ->  update("osoba", ["imie" => $this->form->imie, "nazwisko" => $this->form->nazwisko, "data_ur" => $this->form->data_ur,
            "nr_pr_jazdy" => $this->form->nr_pr_jazdy, "nr_tel" => $this->form->nr_tel], ["konto_id_konta" => $this->id ] );

        
                    
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            }  

        App::getMessages()->addMessage(new \core\Message("Edycja przebiegła pomyślnie !", \core\Message::INFO));    
        App::getRouter()->forwardTo('personEdit');
        

    }
}

public function generateView() {

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("PersonEditFormView.tpl");

}



        

    












}