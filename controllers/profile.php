<?php

class Profile extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('profile/index');
    }

}
