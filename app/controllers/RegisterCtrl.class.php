<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use app\forms\RegisterForm;

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
		

		if ($this->form->login == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano nazwy użytkownika!", \core\Message::ERROR));
		}
		if ($this->form->email == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano adresu email!", \core\Message::ERROR));    
		}
		if ($this->form->pass == "") {
			App::getMessages()->addMessage(new \core\Message("Nie podano hasła!", \core\Message::ERROR)); 
		}
        if ($this->form->pass_repeat == "") {
			App::getMessages()->addMessage(new \core\Message("Wprowadź hasło ponownie!", \core\Message::ERROR)); 
		}
        if ($this->form->imie == "") {
            App::getMessages()->addMessage(new \core\Message("Nie podano imienia!", \core\Message::ERROR));
        }
        if ($this->form->nazwisko == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano nazwiska!", \core\Message::ERROR));    
        }
        if ($this->form->nr_prawa_jazdy == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano numeru prawa jazdy!", \core\Message::ERROR)); 
        }
        if ($this->form->nr_tel == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano numeru telefonu!", \core\Message::ERROR)); 
        }
        if ($this->form->data_ur == "") {
                App::getMessages()->addMessage(new \core\Message("Nie podano daty urodzenia!", \core\Message::ERROR)); 
        }
		
		
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
        
        if(! App::getMessages()->isError()) {

            if (strlen($this->form->login) < 5) {
                App::getMessages()->addMessage(new \core\Message("Login jest zbyt krótki!", \core\Message::ERROR)); 
            }
            if (strlen($this->form->pass) < 8) {
                App::getMessages()->addMessage(new \core\Message("Hasło jest zbyt krótkie!", \core\Message::ERROR)); 
            }

        }

         if(! App::getMessages()->isError()) {

            if ( ! is_numeric( $this->form->nr_prawa_jazdy ) && ! $this->form->nr_prawa_jazdy < 11) {
                App::getMessages()->addMessage(new \core\Message("Numer musi być liczbą całkowitą i musi być długości 11!", \core\Message::ERROR)); 
            }
            if ( ! is_numeric( $this->form->nr_tel ) && ! $this->form->nr_tel < 11) {
                App::getMessages()->addMessage(new \core\Message("Numer telefonu musi być liczbą całkowitą!", \core\Message::ERROR)); 
            }
        }   
	
		return ! App::getMessages()->isError();    
	}

    public function action_register() {

        $this->getParams();
        $this->validate();

        if( App::getMessages()->isError()) {

            App::getSmarty()->assign('form', $this->form);
            App::getSmarty()->assign('page_title','RacingCars');      
            App::getSmarty()->display("RegisterView.tpl");
    
        }

        if( ! App::getMessages()->isError()) {

            try {
                //Dane internetowe
                App::getDB() -> insert("konto", ["login" => $this->form->login , "email" => $this->form->email  , "haslo" => $this->form->pass]);
                App::getDB() -> insert("osoba", ["imie" => $this->form->imie, "nazwisko" => $this->form->nazwisko, "data_ur" => $this->form->data_ur,
                "nr_pr_jazdy" => $this->form->nr_prawa_jazdy, "nr_tel" => $this->form->nr_tel]);
            
                $account_id = (int)App::getDB()->id();
                App::getDB() -> update("konto", ["klient_id_klienta" => $account_id],["id_konta" => $account_id]);
                App::getDB() -> update("osoba", ["konto_id_konta" => $account_id],["id_osoby" => $account_id]);
            
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  

        
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("FinalRegisterView.tpl");
        
	}
      
       
        

    }
    

    


}

    
    
    

