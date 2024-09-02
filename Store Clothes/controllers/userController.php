<?php
require_once 'model/user.php';

class UserController {
    
    public function index() {
        echo 'Controlador User, Acción index';
    }

    public function register() {
        require_once 'views/users/register.php';
    }

    public function save() {
        if(isset($_POST)){
            $user = new User();
            $user->setNombre($_POST['nombre']);
            $user->setApellidos($_POST['apellidos']);
            $user->setEmail($_POST['email']);
            $user->setPassword($_POST['password']);
            $user->setRol($_POST['rol']);
            $user->setImagen($_POST['imagen']);

            if($user->save()) {
                header("Location: index.php?controller=user&action=showAll");
            }
        }
    }
}