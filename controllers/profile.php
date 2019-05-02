<?php

class Profile extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {

            switch ($args[1]) {
                case 'edit':
                    $this->editProfile();
                    break;

                case 'edit_password':
                    $this->editPassword();
                    break;

                default:
                    $this->view->render('error/index');
                    break;
            }
        } else {
            if ($this->session->isLogged()) {
                if (filter_has_var(INPUT_POST, 'edit_profile')) {
                    
                    $email = filter_input(INPUT_POST, 'email');
                    $password = filter_input(INPUT_POST, 'password');
                    
                    if ($this->model->isPasswordCorrect($this->session->getUserId(), $password)) {
                        $this->model->updateUserInfo($this->session->getUserId(), $email);
                        $this->session->updateUserInfo($this->model->getUserInfo($this->session->getUserId()));
                        $this->view->addData('info', array('Profile updated'));
                    } else {
                        $this->view->addData('errors', array('Incorrect password'));
                    }
                    
                    
                } else if (filter_has_var(INPUT_POST, 'edit_password')) {
                    
                    $password_old = filter_input(INPUT_POST, 'password');
                    $password_new = filter_input(INPUT_POST, 'password_new');
                    $password_new_confirm = filter_input(INPUT_POST, 'password_new_confirm');
                    
                    if ($this->model->isPasswordCorrect($this->session->getUserId(), $password_old) && $password_new === $password_new_confirm) {
                        $this->model->updateUserPassword($this->session->getUserId(), $password_new);
                        $this->view->addData('info', array('Password updated'));
                    } else {
                        $this->view->addData('errors', array('something went wrong...'));
                    }
                }
                $this->view->render('profile/index');
            } else {
                header('location: /parduotuve/login');
            }
        }
    }

    function editProfile() {
        if ($this->session->isLogged()) {
            $this->view->render('profile/edit');
        } else {
            header('location: /parduotuve/login');
        }
    }

    function editPassword() {
        if ($this->session->isLogged()) {
            $this->view->render('profile/edit_password');
        } else {
            header('location: /parduotuve/login');
        }
    }

}
