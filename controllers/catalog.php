<?php

class Catalog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('catalog/index');
    }

}
