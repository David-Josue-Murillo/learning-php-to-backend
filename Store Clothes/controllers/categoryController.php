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
        if(isset($_POST)){
            $category = new Category();
            $category->setNombre($_POST['nombre']);

            $save = $category->save();
            if($save) {
                header("Location: index.php?controller=category&action=index");
            } else {
                header("Location: index.php?controller=category&action=create");
            }
        } else {
            header("Location: index.php?controller=category&action=create");
        }
    }
 }