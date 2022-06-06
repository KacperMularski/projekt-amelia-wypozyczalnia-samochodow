<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\EditUserForm;
use core\Validator;


class EditUserCtrl {

    private $form;
    private $record;
    

    public function __construct() {

        $this->form = new EditUserForm();

        
    }

    public function idValidate() {

        $this->form->id = ParamUtils::getFromCleanURL(1, true , 'Błędne wywołanie aplikacji');

        try {
            $id_verify = App::getDB() -> has("konto", ["id_konta" => $this->form->id]);

            if (!$id_verify) {
                Utils::addErrorMessage('Nie istnieje użytkownik o tym ID'); 

                App::getRouter()->forwardTo('adminUzytkownicyPage');   
            }
            
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        
        return !App::getMessages()->isError();
    }

    public function action_EditUser() {

        if ($this->idValidate()) {

            $this->loadParameters();  
        }

        $this->generateView();

    }

    public function loadParameters() {

        try {

            $this->record = App::getDB() -> get("osoba",["[>]konto" => ["id_osoby" => "id_konta"]],["imie","nazwisko","data_ur","nr_pr_jazdy","nr_tel","login","email","haslo","rola","czy_aktywny"], 
                ["id_osoby" => $this->form->id]); 

            $this->form->login = $this->record['login'];
            $this->form->login_check = $this->record['login'];
            $this->form->email = $this->record['email'];
            $this->form->email_check = $this->record['email'];
            $this->form->imie = $this->record['imie'];
            $this->form->nazwisko = $this->record['nazwisko'];
            $this->form->data_ur = $this->record['data_ur'];
            $this->form->nr_pr_jazdy = $this->record['nr_pr_jazdy'];
            $this->form->nr_tel = $this->record['nr_tel'];
            $this->form->haslo = $this->record['haslo'];
            $this->form->rola = $this->record['rola'];
            $this->form->czy_aktywny = $this->record['czy_aktywny'];

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Wystąpił błąd podczas odczytu rekordu');
            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

    }

    public function editValidate() {

        if (! (isset($this->form->login) && isset($this->form->email) && isset($this->form->imie) && isset($this->form->nazwisko) 
            && isset($this->form->nr_pr_jazdy) && isset($this->form->nr_tel) && isset($this->form->data_ur) && isset($this->form->haslo) 
            && isset($this->form->rola) && isset($this->form->czy_aktywny))) {
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

            $val->validate($this->form->haslo,[
                'required' => true,
                'required_message' => 'Hasło jest wymagane',
                'regexp' => "/(.{8,})/",
                'validator_message' => 'Hasło powinno mieć co najmniej 8 znaków'
            ]);

            $val->validate($this->form->rola,[
                'trim' => true,
                'required' => true,
                'required_message' => 'Nie wybrano roli'
            ]);

            $val->validate($this->form->czy_aktywny,[
                'trim' => true,
                'required' => true,
                'int' => true,
                'max' => 1,
                'required_message' => 'Nie wybrano czy aktywny',
                'validator_message' => 'Zły format (1 lub 0)'
            ]);

            if (! App::getMessages()->isError()) {

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

    public function loadParametersForm(){

        $this->form->login = ParamUtils::getFromRequest('login');
        $this->form->email = ParamUtils::getFromRequest('email');
        $this->form->imie = ParamUtils::getFromRequest('imie');
        $this->form->nazwisko = ParamUtils::getFromRequest('nazwisko');
        $this->form->nr_pr_jazdy = ParamUtils::getFromRequest('nr_pr_jazdy');
        $this->form->nr_tel = ParamUtils::getFromRequest('nr_tel');
        $this->form->data_ur = ParamUtils::getFromRequest('data_ur');
        $this->form->haslo = ParamUtils::getFromRequest('haslo');
        $this->form->rola = ParamUtils::getFromRequest('rola');
        $this->form->czy_aktywny = ParamUtils::getFromRequest('czy_aktywny');
    }

    public function action_saveEditUser() {

        $this->idValidate();
        $this->loadParameters();
        $this->loadParametersForm();

        if ($this->editValidate()) {

            try {
                App::getDB() ->  update("konto", ["login" => $this->form->login, "email" => $this->form->email, "haslo" => $this->form->haslo, "rola" => $this->form->rola], ["id_konta" => $this->form->id ] );
                App::getDB() ->  update("osoba", ["imie" => $this->form->imie, "nazwisko" => $this->form->nazwisko, "data_ur" => $this->form->data_ur,
                "nr_pr_jazdy" => $this->form->nr_pr_jazdy, "czy_aktywny" => (int)$this->form->czy_aktywny ], ["konto_id_konta" => $this->form->id ] );
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
                    
            
            App::getMessages()->addMessage(new \core\Message("Edycja przebiegła pomyślnie !", \core\Message::INFO)); 
            
            App::getRouter()->forwardTo('SearchUser'); 
    
        }

        else {

            $this->generateView();
        }

    }

    public function generateView() {

        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("EditUserView.tpl");
    }

}

