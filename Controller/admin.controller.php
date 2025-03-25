<?php
require "Model/Exam.php";
$config = require "config.php";

$examDB = new Exam($config['database']);

$examenesCantidad = $examDB->getExamsCount();

require "VistaBeta/BetaAdmin/principalAdmin.php";