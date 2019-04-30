<?php

class Controller {

    protected $model;
    protected $view;
    protected $session;

    function __construct() {

        // Instantiating Model class
        $this->loadModel(get_called_class());

        // Instantiating Session class
        $this->session = new Session();

        // Instantiating View class
        $this->view = new View($this->session);
        $this->view->addData('categories', $this->model->getCategories());
    }

    function loadModel($name) {

        // Path to model
        $path = 'models/' . $name . 'Model.php';

        // Checking if model file exists
        if (file_exists($path)) {

            // Including model file
            require_once $path;

            // Checking if required model class exists
            if (class_exists($name . 'Model')) {

                // Instantiating model class
                $this->model = $name . 'Model';
                $this->model = new $this->model($this->session);
                return TRUE;
            } else {
                $this->model = new Model();
                // No such model class
                return FALSE;
            }
        } else {
            $this->model = new Model();
            // No such model file
            return FALSE;
        }
    }

}
