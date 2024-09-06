<?php
require_once 'model/category.php';
 class CategoryController {
    
    public function index() {
        $category = new Category();
        $categories = $category->getCategories();

        require_once 'views/category/index.php';
    }
 }