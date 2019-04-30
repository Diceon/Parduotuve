<?php

class Register extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (!$this->session->isLogged()) {
            if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'email') && filter_has_var(INPUT_POST, 'password')) {
                $register_result = $this->model->register(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));
                if ($register_result) {
                    header('location: /parduotuve/');
                } else {
                    $this->view->render('register/index', 'Something is wrong...');
                }
            } else {
                $this->view->render('register/index');
            }
        } else {
            header('location: /parduotuve/');
        }
    }

}
