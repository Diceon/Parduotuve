<?php

class Register extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (!$this->session->isLogged()) {
            if (filter_has_var(INPUT_POST, 'username') && filter_has_var(INPUT_POST, 'email') && filter_has_var(INPUT_POST, 'password') && filter_has_var(INPUT_POST, 'password2')) {

                $isValid = $this->isRegisterDataValid();
                
                if ($isValid === TRUE) {
                    $register_result = $this->model->register(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'email', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING));

                    if ($register_result) {
                        header('location: /parduotuve/');
                    } else {
                        $this->view->render('register/index', 'Something went wrong...');
                    }
                    
                } else {
                    $this->view->addData('errors', $isValid);
                    $this->view->render('register/index');
                }
            } else {
                $this->view->render('register/index');
            }
        } else {
            header('location: /parduotuve/');
        }
    }

    function isRegisterDataValid() {
        $errors = array();

        if (!$this->model->isUsernameUnique(filter_input(INPUT_POST, 'username', FILTER_SANITIZE_STRING))) {
            array_push($errors, 'Username already exists!');
        }

        if (filter_input(INPUT_POST, 'password', FILTER_SANITIZE_STRING) != filter_input(INPUT_POST, 'password2', FILTER_SANITIZE_STRING)) {
            array_push($errors, 'Passwords does not match!');
        }

        return count($errors) > 0 ? $errors : TRUE;
    }

}
