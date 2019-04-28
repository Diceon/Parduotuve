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
                array_push($forums, $forum);
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
                array_push($forumPosts, $forumPost);
            }

            return $forumPosts;
        } else {
            return array();
        }
    }

    function getForumPost($id) {
        $result = mysqli_query($this->db, "SELECT forum_posts.*, users.username as 'user', forums.name as 'forum' FROM forum_posts LEFT JOIN users ON users.id = forum_posts.user LEFT JOIN forums ON forums.id = forum_posts.forum WHERE forum_posts.id = '" . $id . "'");

        if ($result && mysqli_num_rows($result) > 0) {
            return mysqli_fetch_array($result, MYSQLI_ASSOC);
        } else {
            return array();
        }
    }

}
