<?php

class Cart extends Controller {

    function __construct($args = NULL) {
        parent::__construct();

        if (isset($args[1])) {

            switch ($args[1]) {
                default:
                    $this->view->render('error/index');
                    break;
            }
        } else {

            if (filter_has_var(INPUT_POST, 'cart_add')) {
                if ($this->session->isLogged()) {
                    $this->model->cartAddProduct($this->session->getUserId(), filter_input(INPUT_POST, 'cart_add'), 1);
                    $this->view->addData('info', array('Product added'));
                } else {
                    $this->view->addData('errors', array('Please login first'));
                }
            } else if (filter_has_var(INPUT_POST, 'cart_remove')) {
                if ($this->session->isLogged()) {
                    $this->model->cartRemoveProduct($this->session->getUserId(), filter_input(INPUT_POST, 'cart_remove'));
                    $this->view->addData('info', array('Product removed'));
                } else {
                    $this->view->addData('errors', array('Please login first'));
                }
            }
            if ($this->session->isLogged()) {
                $this->view->addData('products', $this->model->getUserCart($this->session->getUserId()));
            }
            $this->view->render('cart/index');
        }
    }

}
