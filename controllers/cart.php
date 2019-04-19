<?php

class Cart extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('cart/index');
    }

}
