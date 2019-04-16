<?php

class Model {

    protected $db;

    function __construct() {
        $this->db = mysqli_connect('localhost', 'root', '', 'parduotuve');

        if (mysqli_connect_errno()) {
            printf("Database connection error: %s\n", mysqli_connect_error());
            die();
        } else {
            mysqli_set_charset($this->db, 'utf8');
        }
    }

}
