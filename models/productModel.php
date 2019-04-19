<?php

class ProductModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getProduct($product) {
        $result = mysqli_query($this->db, "SELECT * FROM products WHERE name = '" . $product . "'");

        if ($result && mysqli_num_rows($result) > 0) {

            $product = mysqli_fetch_array($result, MYSQLI_ASSOC);

            return $product;
        } else {
            return array();
        }
    }

}
