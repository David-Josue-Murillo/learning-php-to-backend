<?php

class Categoria extends Database{
    //Conexion
    
    public function getCategorias(){
        $conexion = parent::connect();
        $sql = "SELECT * FROM categoria";
        $stmt = $conexion->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}