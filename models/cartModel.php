<?php

class cartModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function doesProductExist($product_id) {
        $result = mysqli_query($this->db, "SELECT * FROM products WHERE id = '" . $product_id . "' LIMIT 1");

        if ($result) {

            if (mysqli_num_rows($result) > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            $this->handleError();
        }
    }

    function getProduct($product_id) {
        $result = mysqli_query($this->db, "SELECT * FROM products WHERE id = '" . $product_id . "' LIMIT 1");

        if ($result) {
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        } else {
            $this->handleError();
        }
    }

    // Unused
    function getUserCart($user_id) {
        $result = mysqli_query($this->db, "SELECT products.id, products.name, products.price, user_cart_products.amount FROM user_cart_products LEFT JOIN products ON user_cart_products.product = products.id WHERE user = '" . $user_id . "'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return $this->resultToArray($result);
            } else {
                return FALSE;
            }
        } else {
            $this->handleError();
        }
    }

    function cartAddProduct($user_id, $product_id, $amount) {
        $result = mysqli_query($this->db, "INSERT INTO user_cart_products (user, product, amount) VALUES ('" . $user_id . "', '" . $product_id . "', '" . $amount . "')");

        if ($result) {
            return TRUE;
        } else {
            $this->handleError();
        }
    }

    function cartRemoveProduct($user_id, $product_id) {
        $result = mysqli_query($this->db, "DELETE FROM user_cart_products WHERE user = '" . $user_id . "' AND product = '" . $product_id . "'");

        if ($result) {
            return TRUE;
        } else {
            $this->handleError();
        }
    }

}
