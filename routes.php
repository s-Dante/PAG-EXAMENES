<?php

$router->get('/','Controller/dashboard.controller.php');
$router->get('/getMaterias','Controller/getMaterias.php');
$router->get('/getExams','Controller/getExamns.php');
$router->get('/inicioSesion','Controller/inicioSesion.controller.php');
$router->get('/maestro','Controller/maestro.controller.php')->only('maestro');

$router->post('/inicioSesion','Controller/inicioSesion.controller.php');