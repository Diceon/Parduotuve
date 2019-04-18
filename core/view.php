<?php

class View {

    protected $session;
    protected $model;
    protected $page;

    function __construct($session, $model) {
        $this->session = $session;
        $this->model = $model;
    }

    public function render($name, $data = NULL) {
        $this->page = explode("/", $name)[0];
        require_once './views/head.php';
        require_once './views/' . $name . '.php';
        require_once './views/foot.php';
    }

}
