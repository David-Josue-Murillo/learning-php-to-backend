<?php
require_once 'ModelBase.php';

class Note extends ModelBase {
    public $usuario_id;
    public $titulo;
    public $descripcion;

    public function getTitulo() {
        return $this->titulo;
    }

    public function setTitulo($titulo) {
        $this->titulo = $titulo;
    }

    public function getDescripcion() {
        return $this->descripcion;
    }

    public function setDescripcion($descripcion) {
        $this->descripcion = $descripcion;
    }

    public function save() {
        $sql = "INSERT INTO entradas (usuario_id, titulo, descripcion, fecha) VALUES ($this->usuario_id, '$this->titulo', '$this->descripcion', CURDATE())";

        $save = $this->db->query($sql);
        return $save;
    }
}