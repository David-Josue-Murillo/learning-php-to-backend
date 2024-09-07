<?php

class Category {
    private $id;
    private $nombre;
    private $db;

    public function __construct() {
        $this->db = Database::connect();
    }

    public function getId() {
        return $this->id;
    }

    public function getNombre() {
        return $this->nombre;
    }

    public function setId($id) {
        $this->id = $this->db->real_escape_string($id);
    }

    public function setNombre($nombre) {
        $this->nombre = $this->db->real_escape_string($nombre);
    }

    public function getALl() {
        $sql = "SELECT * FROM categorias";
        $query = $this->db->query($sql);

        if($query && $query->num_rows > 0) {
            $result = array();
            while($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
        }

        return $result;
    }

    public function save() {
        $sql = "INSERT INTO categorias (nombre) VALUES ('$this->nombre')";
        $save = $this->db->query($sql);
        
        $result = false;
        if($save) {
            $result = true;
        }

        return $result;
    }

    public function getCategories() {
        $sql = "SELECT * FROM categorias ORDER BY id DESC";
        $query = $this->db->query($sql);

        if($query && $query->num_rows > 0) {
            $result = array();
            while($row = $query->fetch_assoc()) {
                $result[] = $row;
            }
        }

        return $result;
    }
}