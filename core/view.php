<?php

class View {

    protected $session;
            
    function __construct($session) {
        $this->session = $session;
    }

    public function render($name, $data = NULL) {
        require_once './views/head.php';
        require_once './views/' . $name . '.php';
        require_once './views/foot.php';
    }

}
