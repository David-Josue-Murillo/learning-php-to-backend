<?php

class User {
    private $id;
    private $nombre;
    private $apellidos;
    private $email;
    private $password;
    private $rol;
    private $imagen;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }
 
    public function getId() {
        return $this->db->real_escape_string($this->id);
    }

    public function getNombre() {
        return $this->db->real_escape_string($this->nombre);
    }

    public function getApellidos() {
        return $this->db->real_escape_string($this->apellidos);
    }

    public function getEmail() {
        return $this->db->real_escape_string($this->email);
    }

    public function getPassword() {
        return password_hash($this->db->real_escape_string($this->password), PASSWORD_BCRYPT, ['cost' => 4]);
    }

    public function getRol() {
        return $this->rol;
    }

    public function getImagen() {
        return $this->imagen;
    }

    public function setId($id) {
        $this->id = $id;
    }

    public function setNombre($nombre) {
        $this->nombre = $nombre;
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $apellidos;
    }   

    public function setEmail($email) {
        $this->email = $email;
    }

    public function setPassword($password) {
        $this->password = $password;
    }

    public function setRol($rol) {
        $this->rol = $rol;
    }

    public function setImagen($imagen) {
        $this->imagen = $imagen;
    }

    public function save() {
        $sql = "INSERT INTO usuarios (nombre, apellidos, email, password, rol, imagen) VALUES ('$this->nombre', '$this->apellidos', '$this->email', '$this->password', '$this->rol', '$this->imagen')";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save) {
            $result = true;
        }

        return $result;
    }
}