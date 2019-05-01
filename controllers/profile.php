<?php

class Profile extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {

            switch ($args[1]) {
                case 'edit':
                    break;

                default:
                    $this->view->render('error/index');
                    break;
            }
        } else {
            $this->view->render('profile/index');
        }
    }

}
