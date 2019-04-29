<?php

class blogModel extends Model {

    function __construct() {
        parent::__construct();
    }

    function getForums() {
        $result = mysqli_query($this->db, "SELECT forums.*, count(forum_posts.id) as 'posts' FROM forums LEFT JOIN forum_posts ON forum_posts.forum = forums.id GROUP BY forums.id");

        if ($result && mysqli_num_rows($result) > 0) {

            $forums = array();

            while ($forum = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($forums, filter_var_array($forum, FILTER_SANITIZE_STRING));
            }

            return $forums;
        } else {
            return array();
        }
    }

    function getForumPosts($forum) {
        $result = mysqli_query($this->db, "SELECT forum_posts.id, forums.name AS 'forum', users.username, forum_posts.name, forum_posts.date FROM forum_posts LEFT JOIN users ON users.id = forum_posts.user LEFT JOIN forums ON forums.id = forum_posts.forum WHERE forums.name = '" . $forum . "'");

        if ($result && mysqli_num_rows($result) > 0) {

            $forumPosts = array();

            while ($forumPost = mysqli_fetch_array($result, MYSQLI_ASSOC)) {
                array_push($forumPosts, filter_var_array($forumPost, FILTER_SANITIZE_STRING));
            }

            return $forumPosts;
        } else {
            return array();
        }
    }

    function getForumPost($id) {
        $result = mysqli_query($this->db, "SELECT forum_posts.*, users.username as 'user', forums.name as 'forum' FROM forum_posts LEFT JOIN users ON users.id = forum_posts.user LEFT JOIN forums ON forums.id = forum_posts.forum WHERE forum_posts.id = '" . $id . "'");

        if ($result && mysqli_num_rows($result) > 0) {
            return filter_var_array(mysqli_fetch_array($result, MYSQLI_ASSOC), FILTER_SANITIZE_STRING);
        } else {
            return array();
        }
    }

    function post($forum, $user, $name, $content) {

        $forumResult = mysqli_query($this->db, "SELECT id FROM forums WHERE name = '" . $forum . "' LIMIT 1");
        $userResult = mysqli_query($this->db, "SELECT id FROM users WHERE username = '" . $user . "' LIMIT 1");

        echo mysqli_error($this->db);
        
        if ($forumResult && mysqli_num_rows($forumResult) > 0 && $userResult && mysqli_num_rows($userResult)) {
            $result = mysqli_query($this->db, "INSERT INTO forum_posts (forum, user, name, message) VALUES ('" . mysqli_fetch_array($forumResult)['id'] . "', '" . mysqli_fetch_array($userResult)['id'] . "', '" . $name . "', '" . $content . "')");

            if ($result) {
                return TRUE;
            } else {
                return FALSE;
            }
            
        } else {
            return FALSE;
        }
    }

}
