<?php

class Blog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {
            if (isset($args[2])) {
                $this->view->addData($this->model->getForumPost($args[2]), 'forum_post');
                $this->view->render('blog/view_post');
            } else {
                $this->view->addData($this->model->getForumPosts($args[1]), 'forum_posts');
                $this->view->render('blog/forum');
            }
        } else {
            $this->view->addData($this->model->getForums(), 'forums');
            $this->view->render('blog/index');
        }
    }

}
