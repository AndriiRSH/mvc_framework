<?php

namespace application\controllers;

use application\core\Controller;

class AccountController extends Controller{

    public function loginAction(){
        if (!empty($_POST)){
            $this->view->message('error', 'Текст помилки');
        }
        $this->view->render('Сторінка входа');
    }

    public function registerAction(){
        $this->view->render('Сторінка реєстрації');
    }
}
