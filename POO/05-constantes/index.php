<?php

class Usuario {
    const URL_COMPLETA = "htpp://localhost:8000";
    public $email;
    public $password;

    public function setEmail($email) {
        $this->email = $email;
    }

    public function getEmail() {
        return $this->email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function getPassword() {
        return $this->password;
    }
}

$user = new Usuario();
echo $user::URL_COMPLETA. "<br/>";

$user->setEmail("david@gmail.com");
echo $user->getEmail(). "<br/>";

$user->setPassword("123456");
echo $user->getPassword(). "<br/>";