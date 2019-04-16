<?php

class Blog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        $this->view->render('blog/index');
    }

}
