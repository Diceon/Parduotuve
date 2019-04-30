<?php

class View {

    protected $session;
    protected $page;
    private $data;

    function __construct($session) {
        $this->session = $session;
    }

    public function addData($key, $data) {
        $this->data[$key] = $data;
    }

    public function render($name, $data = NULL) {
        $this->page = explode("/", $name)[0];
        require_once './views/head.php';
        require_once './views/' . $name . '.php';
        require_once './views/foot.php';
    }

}
