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
                    echo 'edit_profile';
                } else if (filter_has_var(INPUT_POST, 'edit_password')) {
                    echo 'edit_password';
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
