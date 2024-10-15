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

    public function insertCategorias($cat_nombre, $cat_obs){
        $conexion = parent::connect();
        $sql = "INSERT INTO categoria(id, cat_nombre, observaciones, estado) VALUES (NULL, ?, ?, 1)";
        $sql = $conexion->prepare($sql);
        $sql->bindValue(1, $cat_nombre);
        $sql->bindValue(2, $cat_obs);
        $result = $sql->fetchAll();        
        return $result;
    }
}