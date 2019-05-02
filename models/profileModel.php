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

}
