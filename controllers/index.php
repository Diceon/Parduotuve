<?php

class Index extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('index/index', $this->model->getProducts());
    }

}
