<?php

class Login extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'password')) {
            $user_info = $this->model->login(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
            if ($user_info) {
                $this->session->login($user_info);
                header('location: /parduotuve/');
            } else {
                $this->view->addData('errors', ['Wrong username / password']);
                $this->view->render('login/index');
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
