<?php

class ProductController {
    
    public function index() {
        
        // Render to feature products
        require_once 'views/products/featured.php';
    }

    public function gestion() {
        require_once 'views/product/gestion.php';
    }
}