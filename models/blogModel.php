<?php

class blogModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function forumExists($forum_id) {
        $result = mysqli_query($this->db, "SELECT * FROM forums WHERE id = '" . $forum_id . "'");

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

    function getForums() {
        $result = mysqli_query($this->db, "SELECT forums.*, count(forum_posts.id) as 'posts' FROM forums LEFT JOIN forum_posts ON forum_posts.forum = forums.id GROUP BY forums.id");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return $this->resultToArray($result);
            } else {
                return array();
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    function getForumPosts($forum_id) {

        if ($this->forumExists($forum_id)) {
            $result = mysqli_query($this->db, "SELECT forum_posts.id, forums.name AS 'forum', users.username, forum_posts.name, forum_posts.date FROM forum_posts LEFT JOIN users ON users.id = forum_posts.user LEFT JOIN forums ON forums.id = forum_posts.forum WHERE forums.id = '" . $forum_id . "'");

            if ($result) {
                if (mysqli_num_rows($result) > 0) {
                    return $this->resultToArray($result);
                } else {
                    return array();
                }
            } else {
                return mysqli_error($this->db);
            }
        } else {
            return FALSE;
        }
    }

    function getForumPost($post_id) {
        $result = mysqli_query($this->db, "SELECT forum_posts.*, users.username as 'user', forums.name as 'forum', forums.id as 'forum_id' FROM forum_posts LEFT JOIN users ON users.id = forum_posts.user LEFT JOIN forums ON forums.id = forum_posts.forum WHERE forum_posts.id = '" . $post_id . "'");

        if ($result) {
            if (mysqli_num_rows($result) > 0) {
                return filter_var_array(mysqli_fetch_array($result, MYSQLI_ASSOC), FILTER_SANITIZE_STRING);
            } else {
                return array();
            }
        } else {
            return mysqli_error($this->db);
        }
    }

    function post($forum_id, $user_id, $name, $content) {
        if ($this->forumExists($forum_id)) {
            $result = mysqli_query($this->db, "INSERT INTO forum_posts (forum, user, name, message) VALUES ('" . $forum_id . "', '" . $user_id . "', '" . $name . "', '" . $content . "')");

            if ($result) {
                return mysqli_insert_id($this->db);
            } else {
                return mysqli_error($this->db);
            }
        } else {
            return ["Forum not found"];
        }
    }

}
