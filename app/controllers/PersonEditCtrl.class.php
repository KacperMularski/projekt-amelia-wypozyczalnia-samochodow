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
use core\Validator;


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

    return ! App::getMessages()->isError();
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

            $val = new Validator();

            $val->validate($this->form->login,[
                'trim' => true,
                'required' => true,
                'min_length' => 5,
                'required_message' => 'Nie wybrano loginu',
                'validator_message' => 'Login jest zbyt krótki (min 5 znaków)'
            ]);

            $val->validate($this->form->email,[
                'trim' => true,
                'required' => true,
                'email' => true,
                'required_message' => 'Nie wybrano adresu email',
                'validator_message' => 'Zły format adresu'
            ]);

            $val->validate($this->form->imie,[
                'trim' => true,
                'required' => true,
                'required_message' => 'Nie wybrano imienia'
            ]);

            $val->validate($this->form->nazwisko,[
                'trim' => true,
                'required' => true,
                'required_message' => 'Nie wybrano nazwiska'
            ]);

            $val->validate($this->form->nr_pr_jazdy,[
                'trim' => true,
                'required' => true,
                'min_length' => 11, 
                'max_length' => 11, 
                'int' => true,
                'required_message' => 'Nie wybrano numeru prawa jazdy',
                'validator_message' => 'Zły format numeru prawa jazdy (11 cyfr)'

            ]);

            $val->validate($this->form->nr_tel,[
                'trim' => true,
                'required' => true,
                'min_length' => 11, 
                'max_length' => 11, 
                'int' => true,
                'required_message' => 'Nie wybrano numeru telefonu',
                'validator_message' => 'Zły format numeru telefonu (11 cyfr, 48...)'
            ]);

            $val->validate($this->form->data_ur,[
                'required' => true,
                'date_format' => 'Y-m-d',
                'required_message' => 'Nie wybrano daty urodzenia',
                'validator_message' => 'Zły format numeru daty (Y-m-d)'
            ]);

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

    if($this->editFormValidate()) {

        try {
            App::getDB() ->  update("konto", ["login" => $this->form->login, "email" => $this->form->email], ["id_konta" => $this->id ] );
            App::getDB() ->  update("osoba", ["imie" => $this->form->imie, "nazwisko" => $this->form->nazwisko, "data_ur" => $this->form->data_ur,
            "nr_pr_jazdy" => $this->form->nr_pr_jazdy, "nr_tel" => $this->form->nr_tel], ["konto_id_konta" => $this->id ] );

        
                    
            } catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
            }  

        App::getMessages()->addMessage(new \core\Message("Edycja przebiegła pomyślnie !", \core\Message::INFO));    
        App::getRouter()->forwardTo('personEdit');

    } else {
        $this->generateView();
    }  
}

public function generateView() {

    App::getSmarty()->assign('form', $this->form);
    App::getSmarty()->assign('page_title','RacingCars');      
    App::getSmarty()->display("PersonEditFormView.tpl");

}



        

    












}