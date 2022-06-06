<?php

use core\App;
use core\Utils;

App::getRouter()->setLoginRoute('login_page'); #action to forward if no permissions

App::getRouter()->setDefaultRoute('start'); #default action
//App::getRouter()->setLoginRoute('login'); #action to forward if no permissions

Utils::addRoute('start', 'StartCtrl');
//Utils::addRoute('action_name', 'controller_class_name');

Utils::addRoute('register_page', 'StartCtrl');

Utils::addRoute('register', 'RegisterCtrl');

Utils::addRoute('login_page', 'StartCtrl');

Utils::addRoute('offer_page', 'OfferCtrl');

Utils::addRoute('login', 'LoginCtrl');

Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('rent_page', 'StartCtrl', ["user","admin"]);

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('editForm', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('savePersonEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('passwordChange', 'PasswordChangeCtrl', ["user","admin"]);

Utils::addRoute('savePasswordChange', 'PasswordChangeCtrl', ["user","admin"]);

Utils::addRoute('rentSearch', 'RentSearchCtrl', ["user","admin"]);

Utils::addRoute('rentCar', 'RentCarCtrl', ["user","admin"]);

Utils::addRoute('rentPay', 'PaidCtrl', ["user","admin"]);

Utils::addRoute('rentHistory', 'RentHistoryCtrl', ["user","admin"]);

//panel administratora (użytkownicy)
Utils::addRoute('SearchUser', 'SearchUserCtrl', ["admin"]);
Utils::addRoute('AddUser', 'SearchUserCtrl', ["admin"]);
Utils::addRoute('saveAddUser', 'AddUserCtrl', ["admin"]);
Utils::addRoute('EditUser', 'EditUserCtrl', ["admin"]);
Utils::addRoute('saveEditUser', 'EditUserCtrl', ["admin"]);

//panel administratora (wypożyczenia)
Utils::addRoute('SearchRent', 'SearchRentCtrl', ["admin"]);

//panel administratora (samochody)
Utils::addRoute('SearchCar', 'SearchCarCtrl', ["admin"]);
Utils::addRoute('EditCar', 'EditCarCtrl', ["admin"]);
Utils::addRoute('saveEditCar', 'EditCarCtrl', ["admin"]);
Utils::addRoute('AddCar', 'SearchCarCtrl', ["admin"]);
Utils::addRoute('saveAddCar', 'AddCarCtrl', ["admin"]);

//panel administratora (pracownicy)
Utils::addRoute('SearchWorker', 'SearchWorkerCtrl', ["admin"]);
Utils::addRoute('EditWorker', 'EditWorkerCtrl', ["admin"]);
Utils::addRoute('saveEditWorker', 'EditWorkerCtrl', ["admin"]);
Utils::addRoute('AddWorker', 'SearchWorkerCtrl', ["admin"]);
Utils::addRoute('saveAddWorker', 'AddWorkerCtrl', ["admin"]);

















