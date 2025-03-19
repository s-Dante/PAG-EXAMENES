<?php
require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);
$resultado = $examDB->borrarTodosLosExamenes();

echo $resultado;
?>
