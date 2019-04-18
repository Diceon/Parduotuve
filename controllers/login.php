<?php

class Login extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')) {
            $login_result = $this->model->login(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            if ($login_result) {
                $this->session->login();
                header('location: /parduotuve/');
            } else {
                $this->view->render('login/index', 'Wrong username / password');
            }
        } else {
            if (!$this->session->isLogged()) {
                $this->view->render('login/index');
            } else {
                header('location: /parduotuve/');
            }
        }
    }

}
