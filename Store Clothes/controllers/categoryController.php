<?php
require_once 'model/category.php';
 class CategoryController {
    
    public function index() {
        Utils::isAdmin();
        $category = new Category();
        $categories = $category->getCategories();

        require_once 'views/category/index.php';
    }

    public function create() {
        Utils::isAdmin();
        require_once 'views/category/create.php';
    }

    public function save() {
        Utils::isAdmin();

        // Check if the form is submitted
        if(isset($_POST) && isset($_POST['nombre'])) {
            $category = new Category();
            $category->setNombre($_POST['nombre']);

            $save = $category->save();
            if($save) {
                header("Location: index.php?controller=category&action=index");
            } else {
                header("Location: index.php?controller=category&action=create");
            }
        } 
            
        header("Location: index.php?controller=category&action=index");
    }
 }