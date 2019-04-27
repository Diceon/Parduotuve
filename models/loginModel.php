<?php

class loginModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function login($username, $password) {
        $result = mysqli_query($this->db, "SELECT * FROM users WHERE username = '" . $username . "' AND password = '" . $password . "'");
        if (mysqli_num_rows($result) > 0) {
            return mysqli_fetch_array($result);
        } else {
            return FALSE;
        }
    }

}
