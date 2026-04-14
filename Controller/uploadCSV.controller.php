<?php
require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);

if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_FILES["csvFile"])) {
    $fileTmpPath = $_FILES["csvFile"]["tmp_name"];

    $resultado = $examDB->insertarDesdeCSV2($fileTmpPath);

    dd($resultado);
} else {
    dd("No se recibió ningún archivo.");
}