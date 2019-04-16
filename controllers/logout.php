<?php

class Logout extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        if ($this->session->isLogged()) {
            $this->session->logout();
            header('location: /parduotuve/');
        } else {
            header('location: /parduotuve/');
        }
    }

}
