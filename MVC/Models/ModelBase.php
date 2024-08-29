<?php
require_once 'Config/db.php';


class ModelBase {
    public $db;

    public function __construct() {
        $this->db = database::connect();
    }

    public function getAll($tabla) {
        $query = "SELECT * FROM $tabla";
        $result = $this->db->query($query);
        return $result;
    }
}