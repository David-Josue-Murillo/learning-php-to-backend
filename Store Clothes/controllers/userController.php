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

            if(isset($_POST['nombre']) && isset($_POST['apellidos']) && isset($_POST['email']) && isset($_POST['password'])) {
                $user = new User();
                $user->setNombre($_POST['nombre']);
                $user->setApellidos($_POST['apellidos']);
                $user->setEmail($_POST['email']);
                $user->setPassword(password_hash($_POST['password'], PASSWORD_BCRYPT, ['cost' => 4]));
                $user->setRol($_POST['rol']);
                $user->setImagen($_POST['imagen']);

                $save = $user->save();
                if($save) {
                    $_SESSION['user'] = $user->getId();
                    $_SESSION['register'] = 'complete';
                    header("Location: index.php");
                } else {
                    $_SESSION['register'] = 'failded';
                    header("Location: index.php?controller=user&action=register");
                }
            } else {
                $_SESSION['register'] = 'failed';
                exit();
            }
        } else {
            $_SESSION['register'] = 'empty';
            header("Location: index.php?controller=user&action=register");
        }
    }

    public function login() {
        if(isset($_POST)){
            if(isset($_POST['email']) && isset($_POST['password'])) {   
                $user = new User();
                $user->setEmail($_POST['email']);
                $user->setPassword($_POST['password']);
                $identity = $user->login();

                if($identity && is_object($identity)) {
                    $_SESSION['identity'] = $identity;

                    if($identity->getRol() == 'admin') {
                        $_SESSION['admin'] = true;
                    }
                } else {
                    $_SESSION['error_login'] = 'Identificación fallida';
                }
            }
        }

        header("Location:".url);
    }

    public function logout() {
        if(isset($_SESSION['identity'])) {
            unset($_SESSION['identity']);
        }
        
        if(isset($_SESSION['admin'])) {
            unset($_SESSION['admin']);
        }

        header("Location:".url);
    }
}