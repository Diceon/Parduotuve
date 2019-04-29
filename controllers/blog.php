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
                    $this->post();
                    break;

                default:
                    $this->view->addData($this->model->getForumPosts($args[1]), 'forum_posts');
                    $this->view->render('blog/forum');
                    break;
            }
            
        } else {
            $this->view->addData($this->model->getForums(), 'forums');
            $this->view->render('blog/index');
        }
    }

    private function view_post($args) {
        
        if (isset($args[2])) {
            $this->view->addData($this->model->getForumPost($args[2]), 'forum_post');
            $this->view->render('blog/view_post');
        } else {
            $this->view->addData($this->model->getForumPosts($args[1]), 'forum_posts');
            $this->view->render('blog/forum');
        }
        
    }

    private function post() {

        if ($this->session->isLogged()) {

            if (filter_has_var(INPUT_POST, 'post_name') && filter_has_var(INPUT_POST, 'post_content')) {
                echo 'finish_post';
                //$this->model->post('general', '321', filter_input(INPUT_POST, 'post_name', FILTER_SANITIZE_STRING), filter_input(INPUT_POST, 'post_content', FILTER_SANITIZE_STRING));
            }

            $this->view->render('blog/post');
        } else {
            header('location: /parduotuve/login');
        }
    }

}
