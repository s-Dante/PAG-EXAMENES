<?php

require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);

$materia = $_GET['materia'] ?? '';
$grupo = $_GET['grupo'] ?? '';
$plan = $_GET['plan'] ?? '';
$carrera = $_GET['carrera'] ?? '';

$unidad = $examDB->obtenerUnidadParaEditar($materia, $grupo, $plan, $carrera);
dd($materia);
dd($grupo);
dd($plan);
dd($carrera);  
dd($unidad);
require "VistaBeta/BetaAdmin/edicionAdmin.php";