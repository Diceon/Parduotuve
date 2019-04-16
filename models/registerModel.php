<?php

class registerModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function register($username, $password) {
        $result = mysqli_query($this->db, "SELECT * FROM users WHERE username = '" . $username . "'");
        if (mysqli_num_rows($result) === 0) {
            $register_result = mysqli_query($this->db, "INSERT INTO users (username, password) VALUES ('" . $username . "', '" . $password . "')");

            if ($register_result) {
                return TRUE;
            } else {
                return FALSE;
            }
        } else {
            return FALSE;
        }
    }

}
