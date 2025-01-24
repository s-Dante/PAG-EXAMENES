<?php
require 'Conexion.php';

class Exam{
    private $con;

    public function __construct($config){
        $this->con = new Conexion($config);
    }

    public function getExams(){
        $sql = "SELECT * FROM Examen";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchAll();
    }

}