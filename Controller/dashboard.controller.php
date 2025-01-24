<?php
require 'Model/Exam.php';
$config=require 'config.php';
$exam=new Exam($config['database']);

$exams=$exam->getExams();

require "Views/dashboard.view.php";