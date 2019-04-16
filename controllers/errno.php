<?php

class Errno extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('error/index');
    }

}
