<?php

class Utils {
    public static function deleteSession($name) {
        if(isset($_SESSION[$name])) {
            $_SESSION[$name] = null;
            unset($_SESSION[$name]);
        }
    }

    public static function isAdmin() {
        if(isset($_SESSION['admin'])) {
            header("Location:".url);
        } else {
            return true;
        }
    }

    public static function showCategory() {
        require_once 'model/category.php';
        $category = new Category();
        $categories = $category->getALl();

        return $categories;
    }
}