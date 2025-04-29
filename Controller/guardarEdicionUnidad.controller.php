<?php
require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);

$original_materia = $_POST['original_materia'];
$original_grupo = $_POST['original_grupo'];
$original_plan = $_POST['original_plan'];
$original_carrera = $_POST['original_carrera'];

$nuevaMateria = $_POST['Materia'];
$nuevoGrupo = $_POST['Grupo'];
$nuevoPlan = $_POST['Plan'];
$nuevaCarrera = $_POST['Carrera'];
$nuevaHora = $_POST['Hora'];

$examDB->actualizarUnidad(
    $original_materia, $original_grupo, $original_plan, $original_carrera,
    $nuevaMateria, $nuevoGrupo, $nuevoPlan, $nuevaCarrera, $nuevaHora
);

header("Location: /admin"); // O a donde gustes
exit;
?>
