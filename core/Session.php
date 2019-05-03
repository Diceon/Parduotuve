<?php

class Session {

    function __construct() {
        session_start();

        if (!isset($_SESSION['user_cart'])) {
            $_SESSION['user_cart'] = array();
        }
    }

    function isLogged() {

        if (isset($_SESSION['isLogged']) && $_SESSION['isLogged'] === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function isAdmin() {

        if (isset($_SESSION['isAdmin']) && $_SESSION['isAdmin'] === TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function login($user_info) {

        if (isset($user_info['id'])) {
            $_SESSION['user_info'] = $user_info;
            $_SESSION['isLogged'] = TRUE;

            if (isset($user_info['admin'])) {
                $_SESSION['isAdmin'] = $user_info['admin'] == 1 ? TRUE : FALSE;
            } else {
                $_SESSION['isAdmin'] = FALSE;
            }
        }
    }

    function getUserId() {
        return $_SESSION['user_info']['id'];
    }

    function getUserName() {
        return isset($_SESSION['user_info']['username']) ? $_SESSION['user_info']['username'] : '';
    }

    function getUserEmail() {
        return isset($_SESSION['user_info']['email']) ? $_SESSION['user_info']['email'] : '';
    }

    function getUserRegisterDate() {
        return isset($_SESSION['user_info']['register_date']) ? $_SESSION['user_info']['register_date'] : '';
    }

    function updateUserInfo($user_info) {
        $_SESSION['user_info'] = $user_info;
    }

    function cartAddProduct($product, $amount) {
        $product['amount'] = $amount;
        array_push($_SESSION['user_cart'], $product);
    }

    function cartRemoveProduct($id) {

        foreach ($_SESSION['user_cart'] as $key => $value) {
            if ($key == $id) {
                unset($_SESSION['user_cart'][$key]);
                return TRUE;
            }
        }
        return FALSE;
    }

    function getUserCart() {
        return $_SESSION['user_cart'];
    }

    function logout() {
        $_SESSION['isLogged'] = FALSE;
    }

}
