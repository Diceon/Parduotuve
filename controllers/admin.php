<?php

class Admin extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if ($this->session->isLogged() && $this->session->isAdmin()) {
            $this->view->render('admin/index');
        } else {
            $this->view->render('error/index');
        }
    }

}
