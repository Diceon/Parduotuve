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
    
    function handleError() {
        if (mysqli_error($this->db)) {
            print_r("DB ERROR: %s\n", mysqli_errno($this->db));
        }
    }

    function resultToArray($result) {
        $list = array();
        while ($i = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
            array_push($list, $i);
        }
        return $list;
    }

    function getUserInfo($user_id) {
        $result = mysqli_query($this->db, "SELECT * FROM users WHERE id = '" . $user_id . "'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return mysqli_fetch_array($result, MYSQLI_ASSOC);
            } else {
                return array();
            }
        } else {
            $this->handleError();
        }
    }

    function getCategories() {

        $result = mysqli_query($this->db, "SELECT * FROM categories");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return $this->resultToArray($result);
            } else {
                return array();
            }
        } else {
            $this->handleError();
        }
    }

    function getProducts($category_id = NULL) {

        $result = mysqli_query($this->db, "SELECT products.*, categories.name as 'category', categories.id as 'category_id' FROM products LEFT JOIN categories ON categories.id = products.category_id" . ($category_id != NULL ? " WHERE category_id = '" . $category_id . "' LIMIT 1" : ""));

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return $this->resultToArray($result);
            } else {
                return array();
            }
        } else {
            $this->handleError();
        }
    }

}
