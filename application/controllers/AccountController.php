<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{

    public function loginAction(){
        $this->view->render('Сторінка входа');
    }

    public function registerAction(){
        $this->view->render('Сторінка реєстрації');
    }
}
