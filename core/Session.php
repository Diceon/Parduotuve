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

    function login($isAdmin = FALSE) {
        $_SESSION['isLogged'] = TRUE;
        $_SESSION['isAdmin'] = $isAdmin == 1 ? TRUE : FALSE;
    }

    function logout() {
        $_SESSION['isLogged'] = FALSE;
        //session_destroy();
    }

}
