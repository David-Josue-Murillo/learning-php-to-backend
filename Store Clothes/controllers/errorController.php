<?php

class errorController {
    public function index() {
        require_once 'productController.php';
        $productController = new ProductController();
        $productController->index();

        exit();
    }
}