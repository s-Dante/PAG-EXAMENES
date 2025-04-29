<?php
require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);

$materiaBuscar = $_GET['q'] ?? '';
$page = isset($_GET['page']) ? (int) $_GET['page'] : 1;
$limit = 5;
$offset = ($page - 1) * $limit;

$resultados = $examDB->obtenerMateriasAgrupadas($materiaBuscar, $limit, $offset);

header('Content-Type: application/json');
echo json_encode($resultados);
?>
