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

Utils::addRoute('offer_page', 'StartCtrl');

Utils::addRoute('login', 'LoginCtrl');

Utils::addRoute('logout', 'LoginCtrl');

Utils::addRoute('contact_page', 'StartCtrl');

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('editForm', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('personEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('savePersonEdit', 'PersonEditCtrl', ["user","admin"]);

Utils::addRoute('passwordChange', 'PasswordChangeCtrl', ["user","admin"]);

Utils::addRoute('savePasswordChange', 'PasswordChangeCtrl', ["user","admin"]);















