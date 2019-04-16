<?php

class About extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('about/index');
    }

}
