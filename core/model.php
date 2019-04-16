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

    function getCategories() {

        $result = mysqli_query($this->db, "SELECT * FROM categories");

        if ($result && mysqli_num_rows($result) > 0) {

            $categories = array();

            while ($category = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($categories, $category);
            }

            return $categories;
        } else {
            return FALSE;
        }
    }

}
