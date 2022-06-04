<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\RegisterForm;
use core\Validator;

class RegisterCtrl {

    private $form;

    public function __construct() {

        $this->form = new RegisterForm();

    }
    //Dane z pierwszego formularza rejestracji
    public function getParams() {

        $this->form->login = ParamUtils::getFromRequest('login');
		$this->form->email = ParamUtils::getFromRequest('email');
		$this->form->pass = ParamUtils::getFromRequest('pass');
        $this->form->pass_repeat = ParamUtils::getFromRequest('pass_repeat');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nr_prawa_jazdy = ParamUtils::getFromRequest('nr_prawa_jazdy');
        $this->form->nr_tel = ParamUtils::getFromRequest('nr_tel');
        $this->form->data_ur = ParamUtils::getFromRequest('data_ur');

	}

    public function validate() {
		
		if (! (isset($this->form->login) && isset($this->form->email) && isset($this->form->pass) && isset($this->form->pass_repeat) 
            && isset($this->form->imie) && isset($this->form->nazwisko) && isset($this->form->nr_prawa_jazdy) && isset($this->form->nr_tel) && isset($this->form->data_ur))) 
            {
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

            $val->validate($this->form->nr_prawa_jazdy,[
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

            $val->validate($this->form->pass_repeat,[
                'required' => true,
                'required_message' => 'Powtórz hasło'
            ]);

            $val->validate($this->form->pass,[
                'required' => true,
                'required_message' => 'Hasło jest wymagane',
                'regexp' => "/(.{8,})/",
                'validator_message' => 'Hasło powinno mieć co najmniej 8 znaków'
            ]);

		if (! App::getMessages()->isError()) {
            if ($this->form->pass != $this->form->pass_repeat)  {
                App::getMessages()->addMessage(new \core\Message("Hasła muszą być takie same!", \core\Message::ERROR)); 
            }  
			
			
		}

        if(! App::getMessages()->isError()) {

            try {

				$name_verify = App::getDB() -> has("konto", ["login" => $this->form->login]);
                $email_verify = App::getDB() -> has("konto", ["email" => $this->form->email]);
                
                    if ($name_verify) {
                        App::getMessages()->addMessage(new \core\Message("Ten login jest zajęty!", \core\Message::ERROR)); 
                    }

                    if ($email_verify) {
                        App::getMessages()->addMessage(new \core\Message("Istnieje już konto o podanym adresie email!", \core\Message::ERROR)); 
                    }

		} catch (\PDOException $ex) {
            App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
		    }
        }
	
		return ! App::getMessages()->isError();    
	}

    public function action_register() {

        $this->getParams();

        if($this->validate()) {

            try {
                //Dane internetowe
                App::getDB() -> insert("konto", ["login" => $this->form->login , "email" => $this->form->email  , "haslo" => $this->form->pass]);
                App::getDB() -> insert("osoba", ["imie" => $this->form->imie, "nazwisko" => $this->form->nazwisko, "data_ur" => $this->form->data_ur,
                "nr_pr_jazdy" => $this->form->nr_prawa_jazdy, "nr_tel" => $this->form->nr_tel]);
            
                $account_id = (int)App::getDB()->id();
                App::getDB() -> update("konto", ["osoba_id_osoby" => $account_id],["id_konta" => $account_id]);
                App::getDB() -> update("osoba", ["konto_id_konta" => $account_id],["id_osoby" => $account_id]);
            
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  

        
                App::getSmarty()->assign('page_title','RacingCars');      
                App::getSmarty()->display("FinalRegisterView.tpl");

        } else {

            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('page_title','RacingCars');      
            App::getSmarty()->display("RegisterView.tpl");
        }

    }
    
}

    
    
    

