<?php

class Catalog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {
            $this->view->addData($this->model->getProducts($args[1]), "products");
        }
        
        $this->view->render('catalog/index');
    }

}
