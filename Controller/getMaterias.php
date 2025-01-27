<?php
require 'Model/Exam.php';
$config = require 'config.php';

try {
    $exam = new Exam($config['database']);

    // Validar el semestre recibido
    $semestre = $_GET['semestre'] ?? null;
    if ($semestre === null) {
        echo json_encode([]);
        exit;
    }

    // Obtener materias por semestre
    $materias = $exam->getMateriasBySemestre($semestre);


    // Devolver como JSON
    echo json_encode($materias);
} catch (Exception $e) {
    echo json_encode([]);
}
