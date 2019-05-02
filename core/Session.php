<?php

class Session {

    function __construct() {
        session_start();
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
            $_SESSION['isLogged'] = TRUE;
            $_SESSION['user_info'] = $user_info;

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

    function logout() {
        $_SESSION['isLogged'] = FALSE;
        //session_destroy();
    }

}
