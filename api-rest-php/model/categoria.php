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

    public function getCategoriasPorId($categoria_id){
        $conexion = parent::connect();
        $sql = "SELECT * FROM categoria WHERE id = ?";
        $stmt = $conexion->prepare($sql);
        $stmt->bindValue(1, $categoria_id);
        $stmt->execute();
        $result = $stmt->fetchAll();
        return $result;
    }
}