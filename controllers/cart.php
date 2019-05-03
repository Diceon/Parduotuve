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
                $this->cartAdd();
            } else if (filter_has_var(INPUT_POST, 'cart_remove')) {
                $this->cartRemove();
            }

            $this->view->addData('products', $this->session->getUserCart());
            $this->view->render('cart/index');
        }
    }

    function cartAdd() {
        $product_id = intval(filter_input(INPUT_POST, 'cart_add'));
        $amount = filter_has_var(INPUT_POST, 'amount') ? intval(filter_input(INPUT_POST, 'amount')) : 1;
        $errors = array();

        if ($product_id == 0) {
            array_push($errors, 'Invalid product');
        } elseif (!$this->model->doesProductExist($product_id)) {
            array_push($errors, 'Product does not exist');
        }

        if ($amount == 0) {
            array_push($errors, 'Incorrect amount');
        }


        if (count($errors) == 0) {
            $this->session->cartAddProduct($this->model->getProduct($product_id), $amount);
            $this->view->addData('info', array('Product added'));
        } else {
            $this->view->addData('errors', $errors);
        }
    }

    function cartRemove() {
        $product_id = intval(filter_input(INPUT_POST, 'cart_remove'));
        $errors = array();

        if ($product_id == 0) {
            array_push($errors, 'Invalid product');
        }

        if (count($errors) == 0) {
            $isRemoved = $this->session->cartRemoveProduct($product_id);
            if ($isRemoved) {
                $this->view->addData('info', array('Product removed'));
            } else {
                array_push($errors, "ERROR");
                $this->view->addData('errors', $errors);
            }
        } else {
            $this->view->addData('errors', $errors);
        }
    }

}
