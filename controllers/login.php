<?php

class Login extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')) {
            $login_result = $this->model->login(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            if ($login_result) {
                $this->session->login();
                header('location: index');
            } else {
                $this->view->render('login/index', 'Wrong username / password');
            }
        } else {
            $this->view->render('login/index');
        }
    }

}
