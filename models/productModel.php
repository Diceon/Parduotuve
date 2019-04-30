<?php

class ProductModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getProduct($product_id) {
        $result = mysqli_query($this->db, "SELECT * FROM products WHERE id = '" . $product_id . "'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return mysqli_fetch_array($result, MYSQLI_ASSOC);
            } else {
                return array();
            }
        } else {
            return mysqli_error($this->db);
        }
    }

}
