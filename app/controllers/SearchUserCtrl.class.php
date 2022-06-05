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
    private $records;

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
            $where = ["AND" => &$search_params];
        } else {
            $where = &$search_params;
        }
        
        $where ["ORDER"] = "nazwisko";

        try {
            $this->records = App::getDB()->select("osoba", 
            ["[>]konto" => ["id_osoby" => "osoba_id_osoby"]],
            ["id_osoby","imie","nazwisko","data_ur","nr_pr_jazdy","nr_tel","czy_aktywny","login","email","rola" 
            ], $where);

        } catch (\PDOException $e) {
            Utils::addErrorMessage('Błąd bazy danych');

            if (App::getConf()->debug)
                Utils::addErrorMessage($e->getMessage());
        }

        $this->generateView();

        
    }

    public function generateView() {

        App::getSmarty()->assign('records',$this->records);
        App::getSmarty()->assign('form',$this->form); 
        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("SearchUserView.tpl");

    }

    public function action_AddUser() {

        App::getSmarty()->assign('page_title','RacingCars');      
        App::getSmarty()->display("AddUserView.tpl"); 
    }

    


}