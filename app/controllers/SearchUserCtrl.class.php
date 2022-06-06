<?php

namespace app\controllers;

use core\App;
use core\Message;
use core\Messages;
use core\ParamUtils;
use core\Utils;
use core\RoleUtils;
use core\SessionUtils;
use app\forms\SearchUserForm;
use core\Validator;


class SearchUserCtrl {

    private $form;
    private $users_records;
    public $offset = 1;
    public $records = 5;
    private $where;

    public function __construct() {

        $this->form = new SearchUserForm();

    }

    public function getParams() {
        $this->form->surname_search = ParamUtils::getFromRequest('surname_search');
        $this->form->login_search = ParamUtils::getFromRequest('login_search');

        return !App::getMessages()->isError();
    }


    public function action_SearchUser() {

        $this->getParams();

        $search_params = []; 

        if (isset($this->form->surname_search) && strlen($this->form->surname_search) > 0) {
            $search_params['nazwisko[~]'] = $this->form->surname_search . '%'; 
        }

        if (isset($this->form->login_search) && strlen($this->form->login_search) > 0) {
            $search_params['login[~]'] = $this->form->login_search . '%'; 
        }

        $num_params = sizeof($search_params);

        if ($num_params > 1) {
            $this->where = ["AND" => &$search_params];
        } else {
            $this->where = &$search_params;
        }
        
        $this->where ["ORDER"] = "nazwisko";

        //stronicowanie
        $offset = ParamUtils::getFromCleanURL(1); 
        
        if(isset($offset) && is_numeric($offset) && $offset > 0) {
            $this->offset += $offset - 1;
        }

        
        if(isset($offset) && $offset == 0) {
            try {

                $this->records = App::getDB() -> count("osoba");
                        
                } catch (\PDOException $ex) {
                App::getMessages()->addMessage(new \core\Message("Błąd bazy danych!", \core\Message::ERROR)); 
                }  
        }

        $this->result();
        $this->generateView();

        
    }

    public function result() {

        try {

            if ((strlen($this->form->surname_search) > 0)  || strlen($this->form->login_search) > 0) {
                $this->users_records = App::getDB()->select("osoba", 
                ["[>]konto" => ["id_osoby" => "osoba_id_osoby"]],
                ["id_osoby","imie","nazwisko","data_ur","nr_pr_jazdy","nr_tel","czy_aktywny","login","email","rola" 
                ],$this->where);
                
            }
            
            else {
                $this->users_records = App::getDB()->select("osoba", 
                ["[>]konto" => ["id_osoby" => "osoba_id_osoby"]],
                ["id_osoby","imie","nazwisko","data_ur","nr_pr_jazdy","nr_tel","czy_aktywny","login","email","rola" 
                ],["LIMIT" => [(($this->offset - 1) * $this->records), $this->records]]);
                
            }
        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych');

            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }
    }

    public function isNextPage() {

        try{
            $isNext = App::getDB()->has("osoba",[
                'LIMIT' => [(($this->offset) * $this->records), $this->records]
            ]);
   
        }catch(\PDOException $e){
            Utils::addErrorMessage("Błąd połączenia z bazą danych!");
        }

        return $isNext;
    }

    public function generateView() {

        App::getSmarty()->assign('users_records',$this->users_records);
        App::getSmarty()->assign('offset', $this->offset);
        App::getSmarty()->assign('records', $this->records);
        App::getSmarty()->assign("isNextPage", $this->isNextPage());
        App::getSmarty()->assign("next_page", $this->offset + 1);
        App::getSmarty()->assign("previous_page", $this->offset - 1);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchUserView.tpl");

    }

    public function action_AddUser() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddUserView.tpl"); 
    }

    


}