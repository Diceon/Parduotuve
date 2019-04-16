<?php

class Product extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('product/index');
    }

}
