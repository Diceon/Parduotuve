<?php

class Index extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->addData('products', $this->model->getProducts());
        $this->view->render('index/index');
    }

}
