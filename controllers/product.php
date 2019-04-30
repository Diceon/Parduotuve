<?php

class Product extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {
            $this->view->addData('product', $this->model->getProduct($args[1]));
        } else {
            header('location: /parduotuve/catalog');
        }

        $this->view->render('product/index');
    }

}
