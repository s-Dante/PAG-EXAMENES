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

    public function getMateriasBySemestre($semestre) {
        $sql = "SELECT DISTINCT Materia FROM Examen WHERE Semestre = :semestre";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute([':semestre' => $semestre]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); // Retorna un array con solo las materias
    }

}