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

    public function getExamsCount(){
        $sql = "SELECT COUNT(*) FROM Examen";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute();
        return $stmt->fetchColumn();
    }

    public function getMateriasBySemestre($semestre) {
        $sql = "SELECT DISTINCT Materia FROM Examen WHERE Semestre = :semestre";
        $stmt = $this->con->getCon()->prepare($sql);
        $stmt->execute([':semestre' => $semestre]);
        return $stmt->fetchAll(PDO::FETCH_COLUMN); // Retorna un array con solo las materias
    }

    public function getExamsByFilters($semestre, $materia = null, $parcial = null) {
        // Base de la consulta
        $sql = "SELECT * FROM Examen WHERE 1=1";
    
        // Filtrar por semestre si no es "Todos"
        if ($semestre !== 'Todos') {
            $sql .= " AND Semestre = :semestre";
        }
    
        // Filtrar por materia si no es "Todas"
        if ($materia && $materia !== 'Todas') {
            $sql .= " AND Materia = :materia";
        }
    
        // Filtrar por parcial si se proporciona
        if ($parcial && $parcial !== '') {
            $sql .= " AND Parcial = :parcial";
        }
    
        $stmt = $this->con->getCon()->prepare($sql);
    
        // Bind de parámetros solo si son necesarios
        if ($semestre !== 'Todos') {
            $stmt->bindParam(':semestre', $semestre, PDO::PARAM_STR);
        }
        if ($materia && $materia !== 'Todas') {
            $stmt->bindParam(':materia', $materia, PDO::PARAM_STR);
        }
        if ($parcial && $parcial !== '') {
            $stmt->bindParam(':parcial', $parcial, PDO::PARAM_STR);
        }
    
        $stmt->execute();
        return $stmt->fetchAll();
    }
    
    
    

}