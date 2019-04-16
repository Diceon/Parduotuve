<?php

class Core {

    // Default controller
    protected $controller = 'index';

    function __construct() {

        // Preparing URL
        $url = $this->parseUrl();

        // Checking if URL supplied
        if ($url) {

            // Checking if controller file exists
            if (file_exists('controllers/' . $url[0] . '.php')) {

                // Setting current controller to requested
                $this->controller = $url[0];
                unset($url[0]);
            } else {
                $this->controller = 'errno';
            }
        }

        // Including controller class file
        require_once 'controllers/' . $this->controller . '.php';

        // Checking if controller class exists
        if (class_exists($this->controller)) {

            // Instantiating new controller class
            $this->controller = new $this->controller($url);
        } else {
            print 'GG: Controller class - ' . $this->controller . ', not found!';
        }
    }

    function parseUrl() {
        if (filter_has_var(INPUT_GET, 'url')) {
            return explode('/', filter_var(rtrim($_GET['url'], '/'), FILTER_SANITIZE_URL));
        }
    }

}
