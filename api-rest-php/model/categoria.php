<?php

class Categoria extends Database{
    //Conexion
    protected $conexion = parent::connect();

    public function getCategorias(){
        $sql = "SELECT * FROM categoria";
        $stmt = $this->conexion->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch();
        return $result;
    }
}