<?php

class Catalog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {
            $this->view->addData("products", $this->model->getProducts($args[1]));
            $this->view->render('catalog/products');
        } else {
            $this->view->addData("categories", $this->model->getCategories());
            $this->view->render('catalog/index');
        }
        
    }

}
