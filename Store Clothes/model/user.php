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

    // Methods GET
    public function __construct() {
        $this->db = Database::connect();
    }
 
    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function getApellidos() {
        return $this->apellidos;
    }

    public function getEmail() {
        return $this->email;
    }

    public function getPassword() {
        return $this->password;
    }

    public function getRol() {
        return $this->rol;
    }

    public function getImagen() {
        return $this->imagen;
    }


    // Methods SET
    public function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function setApellidos($apellidos) {
        $this->apellidos = $this->db->real_escape_string($apellidos);
    }   

    public function setEmail($email) {
        $this->email = $this->db->real_escape_string($email);
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

    public function login() {

        $email = $this->email;
        $password = $this->password;
        $result = false;

        $sql = "SELECT id FROM usuarios WHERE email='$email'";
        $query = $this->db->query($sql);

        if($query && $query->num_rows > 1) {
            $user = $query->fetch_assoc();

            //Verify password
            $verify = password_verify($password, $user['password']);

            if($verify) {
                $result = $user;
            }
        }

        return $result;
    }
}