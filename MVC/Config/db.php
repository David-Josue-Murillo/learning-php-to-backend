<?php

class database {
    public static function connect() {
        $conexion = new mysqli("localhost", "root", "root", "notas_master");
        $conexion->query("SET NAMES utf8");

        return $conexion;
    }
}