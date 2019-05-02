<?php

class profileModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function updateUserInfo($user_id, $email) {
        $result = mysqli_query($this->db, "UPDATE users SET email = '" . $email . "' WHERE id = '" . $user_id . "'");

        if ($result) {
            return TRUE;
        } else {
            return mysqli_error($this->db);
        }
    }

    function updateUserPassword($user_id, $password) {
        $result = mysqli_query($this->db, "UPDATE users SET password = '" . $password . "' WHERE id = '" . $user_id . "'");

        if ($result) {
            return TRUE;
        } else {
            return mysqli_error($this->db);
        }
    }

    function isPasswordCorrect($user_id, $password) {
        $result = mysqli_query($this->db, "SELECT * FROM users WHERE id = '" . $user_id . "' AND password = '" . $password . "'");

        if ($result) {
            
            if (mysqli_num_rows($result) > 0) {
                return TRUE;
            } else {
                return FALSE;
            }
            
        } else {
            return mysqli_error($this->db);
        }
    }

}
