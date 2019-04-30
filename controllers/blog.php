<?php

class Blog extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {

            switch ($args[1]) {

                case 'view_post':
                    $this->view_post($args);
                    break;

                case 'post':
                    $this->post($args);
                    break;

                default:
                    $this->view->addData('forum_posts', $this->model->getForumPosts($args[1]));
                    $this->view->addData('forum_id', $args[1]);
                    $this->view->render('blog/forum');
                    break;
            }
        } else {
            $this->view->addData('forums', $this->model->getForums());
            $this->view->render('blog/index');
        }
    }

    private function view_post($args) {

        if (isset($args[2])) {
            $this->view->addData('forum_post', $this->model->getForumPost($args[2]));
            $this->view->render('blog/view_post');
        } else {
            $this->view->addData('forum_posts', $this->model->getForumPosts($args[1]));
            $this->view->render('blog/forum');
        }
    }

    private function post($args) {

        if ($this->session->isLogged()) {

            if (isset($args[2])) {
                $this->view->addData('forum_id', $args[2]);

                if (filter_has_var(INPUT_POST, 'post_name') && filter_has_var(INPUT_POST, 'post_content')) {
                    $post_id = $this->model->post($args[2], $this->session->getUserId(), filter_input(INPUT_POST, 'post_name', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'post_content', FILTER_SANITIZE_STRING));
                    header('location: /parduotuve/blog/view_post/' . $post_id);
                }

                $this->view->render('blog/post');
            } else {
                header('location: /parduotuve/blog/');
            }
        } else {
            header('location: /parduotuve/login');
        }
    }

}
