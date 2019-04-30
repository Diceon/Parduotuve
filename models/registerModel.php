<?php

class registerModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function isUsernameUnique($username) {
        $result = mysqli_query($this->db, "SELECT  * FROM users WHERE username = '" . $username . "'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return FALSE;
            } else {
                return TRUE;
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    function register($username, $email, $password) {
        $register_result = mysqli_query($this->db, "INSERT INTO users (username, email, password) VALUES ('" . $username . "', '" . $email . "', '" . $password . "')");

        if ($register_result) {
            return TRUE;
        } else {
            return mysqli_error($this->db);
        }
    }

}
