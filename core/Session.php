<?php

class Session {

    function __construct() {
        session_start();
    }

    function isLogged() {

        if (isset($_SESSION['logged']) && $_SESSION['logged'] == TRUE) {
            return TRUE;
        } else {
            return FALSE;
        }
    }

    function login() {
        $_SESSION['logged'] = TRUE;
    }

    function logout() {
        session_destroy();
    }

}
