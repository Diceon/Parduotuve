<?php

class About extends Controller {

    function __construct($args = NULL) {
        parent::__construct();
        
        if (isset($args[1])) {
            
            switch ($args[1]) {
                default:
                    $this->view->render('error/index');
                    break;
            }
            
        } else {
            $this->view->render('about/index');
        }
        
    }

}
