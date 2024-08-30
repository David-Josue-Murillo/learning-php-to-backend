<?php

class ProductController {
    
    public function index() {
        
        // Render to feature products
        require_once 'views/products/featured.php';
    }
}