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
            $dsn = "mysql:host=". $this->host .";dbname=". $this->db_name. ";charset=utf8"; //cadena de conexión (data source name)
            $this->conn = new PDO($dsn, $this->username, $this->password);
            $this->conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION); // Configurar atributos de PDO
            $this->conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC); // Modo de recuperación de datos
       } catch (PDOException $e){
            error_log("Error de conexión: " . $e->getMessage()); // Registra el error en los logs
            echo "No se pudo establecer la conexión con la base de datos.";
       }

       return $this->conn;
    }
}