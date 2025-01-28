<?php
require 'Model/Exam.php';
$config = require 'config.php';

try {
    $exam = new Exam($config['database']);

    // Obtener filtros desde el frontend
    $semestre = $_GET['semestre'] ?? null;
    $materia = $_GET['materia'] ?? null;
    $parcial = $_GET['parcial'] ?? null;

    // Validar que el semestre no sea nulo
    if ($semestre === null) {
        echo json_encode([]);
        exit;
    }

    // Obtener exámenes según filtros
    $exams = $exam->getExamsByFilters($semestre, $materia, $parcial);

    // Devolver resultados como JSON
    echo json_encode($exams);
} catch (Exception $e) {
    echo json_encode([]);
}
