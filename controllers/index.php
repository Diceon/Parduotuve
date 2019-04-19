<?php

class Index extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->addData($this->model->getProducts(), 'products');
        $this->view->render('index/index');
    }

}
