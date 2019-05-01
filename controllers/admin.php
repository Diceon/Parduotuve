<?php

class Admin extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if ($this->session->isLogged() && $this->session->isAdmin()) {

            if (isset($args[1])) {

                switch ($args[1]) {
                    default:
                        $this->view->render('error/index');
                        break;
                }
                
            } else {
                $this->view->render('admin/index');
            }
        } else {
            $this->view->render('error/index');
        }
    }

}
