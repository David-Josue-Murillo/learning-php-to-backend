<?php

class Database{
    private $host = "localhost";
    private $db_name = "api-php";
    private $username = "root";
    private $password = "root";
    private $conn;

    public function connect(){
       $this->conn = null;

       try{
            $dsn = "mysql:host:". $this->host .";dbname=". $this->db_name; //cadena de conexión (data source name)
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar atributos de PDO
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Modo de recuperación de datos
       } catch (PDOException $e){
            echo "Error de conexion: ". $e->getMessage();
       }

       return $this->conn;
    }

    public function st_name() {
        return $this->conn->query("SET NAMES utf8");
    }
}